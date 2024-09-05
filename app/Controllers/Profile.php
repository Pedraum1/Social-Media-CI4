<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\PostModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\I18n\Time;

class Profile extends BaseController
{
    protected $user_model;
    protected $post_model;

    public function __construct()
    {
        $this->user_model = new UserModel();
        $this->post_model = new PostModel();
    }

    public function profile($tag)
    {
        $post_erros = session()->getFlashdata('post_erros');

        $user = $this->user_model->where('tag', $tag)->first();

        $posts = $this->post_model->where('writer', $user->id)->orderBy('created_at', 'DESC')->findAll();

        foreach ($posts as $post) {
            $post->writer = $user->name;
            $post->writer_tag = $user->tag;
        }

        $data = ['user' => $user, 'posts' => $posts, 'post_erros' => $post_erros, 'data' => Time::now()];
        return view('profile', $data);
    }

    public function profile_update($tag){

        $validation = $this->validate([
            'tagInput' => [
                'label' => 'Name',
                'rules' => 'required',
                'errors' => [
                    'required'   => 'Você precisa de um nome, preencha corretamente!',
                ]
            ],
            'tagInput' => [
                'label' => 'Tag',
                'rules' => 'required|min_length[4]|max_length[12]|is_unique[users.tag]',
                'errors' => [
                    'required'   => 'A Tag é obrigatória, preencha corretamente!',
                    'min_length' => 'A Tag deve ter mais de 4 caracteres, preencha corretamente!',
                    'max_length' => 'A Tag deve ter menos de 12 caracteres, preencha corretamente!',
                    'is_unique'  => 'Sinto muito, a tag inserida já está sendo usada por alguém ;('
                ]
            ],
            'descriptionInput' => [
                'label' => 'Description',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Você precisa de uma descrição, preencha corretamente!'
                ]
            ],
            'photoInput' => [
                'label' => 'Foto',
                'rules' => 'max_size[Foto,16384]|is_image[Foto]',
                'errors' => [
                    'max_size'=>'O Arquivo enviado para ser sua foto de perfil é muito grande! (Máx: 16mb)',
                    'is_image'=>'O Arquivo enviado para ser sua foto de perfil não é uma imagem!',
                ]
            ],
            'bannerInput' => [
                'label' => 'Banner',
                'rules' => 'max_size[Foto,16384]|is_image[Foto]',
                'errors' => [
                    'max_size'=>'O Arquivo enviado para ser sua foto de banner é muito grande! (Máx: 16mb)',
                    'is_image'=>'O Arquivo enviado para ser sua foto de banner não é uma imagem!',
                ]
            ],
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('profile_erros', $this->validator->getErrors()); //REDIRECIONANDO
        }

        $tag   = $this->request->getPost('tagInput');
        $caracteres_error = [' ', ':', '/', '?', '#', '[', ']', '@', '!', '$', '&', "'", '(', ')', '*', '+', ',', ';', '=', '%', '"', '<', '>', '\\', '^', '{', '}', '|', '~', '`'];
        $tag = str_replace($caracteres_error,'',$tag);

        foreach($this->user_model->findAll() as $user){
            if($user->tag == $tag){
                return redirect()->back()->withInput()->with('profile_erros', ['Sinto muito, a tag inserida já está sendo usada por alguém ;(']); //REDIRECIONANDO
            }
        }

        $user = $this->user_model->where('tag',$tag)->first();
    }
}
