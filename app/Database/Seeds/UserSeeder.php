<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UserSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('users')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'name'=>'Ana Silva',
            'description'=>'Apaixonada por fotografia e viagens. Compartilho minhas aventuras pelo mundo.',
            'followers'=>12345,
            'following'=>300,
            'tag'=>'ana_travels',
        ]);
        
        $this->db->table('users')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'name'=>'Carlos Peeira',
            'description'=>'Desenvolvedor front-end, entusiasta de tecnologia e café. Sempre aprendendo algo novo!',
            'followers'=>8732,
            'following'=>450,
            'tag'=>'carlos_code',
        ]);

        $this->db->table('users')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'name'=>'Beatriz Souza',
            'description'=>'Estudante de medicina e amante de livros. Compartilho dicas de estudos e meu dia a dia na faculdade.',
            'followers'=>15678,
            'following'=>520,
            'tag'=>'bia_medlife',
        ]);

        $this->db->table('users')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'name'=>'Ricardo Nunes',
            'description'=>'Personal trainer e nutricionista. Dicas de treino e alimentação saudável para quem quer mudar de vida.',
            'followers'=>20250,
            'following'=>780,
            'tag'=>'ricardo_fit',
        ]);

        $this->db->table('users')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'name'=>'João Marques',
            'description'=>'Fotógrafo de vida selvagem. Capturando a beleza da natureza através das minhas lentes.',
            'followers'=>22180,
            'following'=>610,
            'tag'=>'joao_wildlife',
        ]);

        $this->db->table('users')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'name'=>'Larissa Oliveira',
            'description'=>'Chef de cozinha apaixonada por criar receitas veganas deliciosas.',
            'followers'=>1894,
            'following'=>350,
            'tag'=>'larissa_veganchef',
        ]);

    }
}
