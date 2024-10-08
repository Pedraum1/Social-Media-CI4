<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\I18n\Time;

class Posts extends BaseController
{
    protected $user_model;
    protected $post_model;

    public function __construct()
    {
        $this->user_model = new UserModel();
        $this->post_model = new PostModel();
    }

    public function index($post_id)
    {
        $post = $this->post_model->find($post_id);

        $comments_erros = session()->getFlashdata('comments_erros');

        $writer = $post->writer;
        $user = $this->user_model->find($writer);
        $post->writer = $user->name;
        $post->writer_tag = $user->tag;

        $comments = $this->post_model->where('type', 2)->where('original_id', $post->id)->orderBy('created_at', 'DESC')->findAll();
        foreach ($comments as $comment) {
            $writer = $comment->writer;
            $user = $this->user_model->find($writer);
            $comment->writer = $user->name;
            $comment->writer_tag = $user->tag;
        }

        $data = ['post' => $post, 'comments' => $comments,'comments_erros'=>$comments_erros];

        return view('Post', $data);
    }

    public function postSubmit()
    {
        $validation = $this->validate([
            'postInput' => [
                'label' => 'Post',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Preencha o Post para publica-lo'
                ]
            ]
        ]);

        $post = $this->request->getPost('postInput');

        if (!$validation) {
            return redirect()->back()->with('post_erros', $this->validator->getErrors()); //REDIRECIONANDO
        }

        $postdata = [
            'writer'     => session('id'),
            'created_at' => Time::now(),
            'type'       => 1,
            'text'       => $post,
            'comments'   => 0,
            'shares'     => 0,
            'likes'      => 0,
            'views'      => 0
        ];

        $this->post_model->insert($postdata);

        return redirect()->back();
    }

    public function commentSubmit()
    {
        $validation = $this->validate([
            'commentInput' => [
                'label' => 'Comment',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Preencha o comentário para publica-lo'
                ]
            ]
        ]);

        $post = $this->request->getPost('commentInput');
        $original_post = $this->request->getPost('originalInput');

        if (!$validation) {
            return redirect()->back()->with('comments_erros', $this->validator->getErrors()); //REDIRECIONANDO
        }

        $commentdata = [
            'original_id'=> (int)$original_post,
            'writer'     => (int)session('id'),
            'created_at' => Time::now(),
            'type'       => 2,
            'text'       => $post,
            'comments'   => 0,
            'shares'     => 0,
            'likes'      => 0,
            'views'      => 0
        ];

        $this->post_model->insert($commentdata);

        $post_updt = $this->post_model->find($original_post);
        $comments_updt = $post_updt->comments + 1;

        $this->post_model->update($post_updt->id,['comments'=>$comments_updt]);

        return redirect()->back();
    }
}
