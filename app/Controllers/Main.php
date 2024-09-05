<?php

namespace App\Controllers;

use App\Models\PostModel;
use App\Models\UserModel;
use CodeIgniter\I18n\Time;

class Main extends BaseController
{
    public function index()
    {
        $posts_model = new PostModel();
        $user_model = new UserModel();
        $posts = $posts_model->where('type',1)->orderBy('created_at','DESC')->findAll();

        $post_erros = session()->getFlashdata('post_erros');

        foreach($posts as $post){
            $writer = $post->writer;
            $user = $user_model->find($writer);
            $post->writer = $user->name;
            $post->writer_tag = $user->tag;
        }
        $data = ['posts'=>$posts,'post_erros'=>$post_erros,'data'=>Time::now()];

        return view('homepage', $data);
    }

    public function notificacao(){
        return view('notificacao');
    }

    public function profile(){}
}
