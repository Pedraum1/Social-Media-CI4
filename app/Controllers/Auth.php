<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\I18n\Time;

class Auth extends BaseController
{
    protected $user_model;

    public function __construct(){
        $this->user_model = new UserModel();
    }

    public function index()
    {
        $data['erros'] = session()->getFlashdata('erros');
        return view('auth/auth',$data);
    }

    public function login(){
        $email = $this->request->getPost('emailInput');
        $senha = $this->request->getPost('passInput');

        $email = $this->user_model->verify_login($email,$senha);
        if(!$email){
            $erros = ['Não foram encontradas usuários com o Email/Senha inseridos.'];
            return redirect()->back()->with('erros',$erros);
        }

        return redirect()->to('/');
    }

    public function register(){

        $email    = $this->request->getPost('emailInput');
        $senha    = $this->request->getPost('passInput');
        $username = $this->request->getPost('userInput');

        $tag = str_replace(" ","_",strtolower($username));

        /*
        $erros = ['não há sistema de registro no site'];
        return redirect()->back()->with('erros',$erros);
        */

        $userdata = [
            'email'=>$email,
            'senha'=>$senha,
            'name'=>$username,
            'tag'=>$tag,
            'created_at'=>Time::now(),
            'followers'=>0,
            'following'=>0,
            'description'=>"Hey there! I'm a Tchola now!"
        ];
        $this->user_model->insert($userdata);
        $user = $this->user_model->where('tag',$tag)->first();
         session()->set(['id'=>$user->id,'user'=>$user]);

        return redirect()->to('/');
    }
}
