<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PostsUserUpdate extends Migration
{
    public function up()
    {
        $fields = [
            'posts'=>[
                'TYPE'=>'INT',
                'constraint'=>11,
                'after'=>'following',
                'default'=>0,
            ],
        ];

        $this->forge->addColumn('users',$fields);
    }

    public function down()
    {
        $this->forge->dropColumn('users',['posts']);
    }
}
