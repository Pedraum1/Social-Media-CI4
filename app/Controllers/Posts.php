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

    public function index()
    {
        //
    }

    public function postSubmit(){
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
            'text'       => $post,
            'comments'=>0,
            'shares'=>0,
            'likes'=>0,
            'views'=>0
        ];

        $this->post_model->insert($postdata);
        
        return redirect()->back();

    }
}
