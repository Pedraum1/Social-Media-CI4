<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\I18n\Time;

class Auth extends BaseController
{
    protected $user_model;

    public function __construct()
    {
        $this->user_model = new UserModel();
    }

    public function index()
    {
        $data['erros'] = session()->getFlashdata('erros');
        return view('auth/auth', $data);
    }

    public function login()
    {
        $validation = $this->validate([
            'emailInput' => [
                'label' => 'Email',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'O Email é obrigatório, preencha corretamente!',
                    'valid_email' => 'O Email inserido não é válido, preencha corretamente!'
                ]
            ],
            'passInput' => [
                'label' => 'Senha',
                'rules' => 'required|min_length[4]|max_length[12]',
                'errors' => [
                    'required' => 'A Senha é obrigatória, preencha corretamente!',
                    'min_length' => 'A Senha deve ter mais de 4 caracteres, preencha corretamente!',
                    'max_length' => 'A Senha deve ter menos de 12 caracteres, preencha corretamente!'
                ]
            ]
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('erros', $this->validator->getErrors()); //REDIRECIONANDO
        }

        $email = $this->request->getPost('emailInput');
        $senha = $this->request->getPost('passInput');

        $resultado = $this->user_model->verify_login($email, $senha);
        if (!$resultado) {
            $erros = ['Não foram encontrados usuários com o Email/Senha inseridos. Tente Novamente.'];
            return redirect()->back()->with('erros', $erros);
        }
        $user = $this->user_model->where('email', $email)->first();
        session()->set(['id' => $user->id, 'user' => $user]);

        return redirect()->to('/');
    }

    public function register()
    {

        $validation = $this->validate([
            'emailInput' => [
                'label' => 'Email',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required'    => 'O Email é obrigatório, preencha corretamente!',
                    'valid_email' => 'O Email inserido não é válido, preencha corretamente!'
                ]
            ],
            'passInput' => [
                'label' => 'Senha',
                'rules' => 'required|min_length[4]|max_length[12]',
                'errors' => [
                    'required'   => 'A Senha é obrigatória, preencha corretamente!',
                    'min_length' => 'A Senha deve ter mais de 4 caracteres, preencha corretamente!',
                    'max_length' => 'A Senha deve ter menos de 12 caracteres, preencha corretamente!',
                ]
            ],
            'passConfirmInput' => [
                'label' => 'Senha Confirmação',
                'rules' => 'matches[passInput]',
                'errors' => [
                    'matches'    => 'As senhas tem que ser iguais, preencha corretamente!'
                ]
            ],
            'nameInput' => [
                'label' => 'Nome',
                'rules' => 'required',
                'errors' => [
                    'required'   => 'Você precisa inserir um nome, preencha corretamente!'
                ]
            ],
            'tagInput' => [
                'label' => 'Tag',
                'rules' => 'required|min_length[4]|max_length[10]|is_unique[users.tag]',
                'errors' => [
                    'required'   => 'A Tag é obrigatória, preencha corretamente!',
                    'min_length' => 'A Tag deve ter mais de 4 caracteres, preencha corretamente!',
                    'max_length' => 'A Tag deve ter menos de 10 caracteres, preencha corretamente!',
                    'is_unique'  => 'Sinto muito, a tag inserida já está sendo usada por alguém ;('
                ]
            ]
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('erros', $this->validator->getErrors()); //REDIRECIONANDO
        }

        $senha = $this->request->getPost('passInput');
        $email = $this->request->getPost('emailInput');
        $name  = $this->request->getPost('nameInput');
        $tag   = $this->request->getPost('tagInput');

        $userdata = [
            'email'=>$email,
            'senha'=>$senha,
            'name'=>$name,
            'tag'=>$tag,
            'created_at'=>Time::now(),
            'description'=>"Hey there. I'm Tchola now!",
            'followers'=>0,
            'following'=>0,
        ];

        $this->user_model->insert($userdata);
        $user = $this->user_model->where('tag', $tag)->first();
        session()->set(['id' => $user->id, 'user' => $user]);

        return redirect()->to('/');
    }

    public function logout()
    {

        session()->destroy();

        return redirect()->to('/auth');
    }
}
