<?php

namespace App\Controllers;

use App\Models\PostModel;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        $posts_model = new PostModel();
        $user_model = new UserModel();
        $posts = $posts_model->findAll();
        foreach($posts as $post){
            $writer = $post->writer;
            $user = $user_model->find($writer);
            $post->writer = $user->name;
            $post->writer_tag = $user->tag;
        }
        $data = ['posts'=>$posts];

        return view('homepage', $data);
    }

    public function profile($tag){

        $user_model = new UserModel();
        $posts_model = new PostModel();

        $user = $user_model->where('tag',$tag)->first();

        $posts = $posts_model->where('writer',$user->id)->findAll();
        
        foreach($posts as $post){
            $post->writer = $user->name;
            $post->writer_tag = $user->tag;
        }

        $data = ['user' => $user,'posts'=>$posts];
        return view('profile',$data);
    }
}
