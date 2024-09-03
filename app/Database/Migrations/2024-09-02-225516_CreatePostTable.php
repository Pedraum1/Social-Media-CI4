<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePostTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>['type'=>'INT','constraint'=>11,'unsigned'=>true,'auto_increment'=>true],
            'writer'=>['type'=>'INT','constraint'=>11],
            'created_at'=>['type'=>'DATETIME'],
            'updated_at'=>['type'=>'DATETIME'],
            'deleted_at'=>['type'=>'DATETIME'],

            'text'=>['type'=>'TEXT'],

            'comments'=>['type'=>'INT','constraint'=>11],
            'shares'=>['type'=>'INT','constraint'=>11],
            'likes'=>['type'=>'INT','constraint'=>11],
            'views'=>['type'=>'INT','constraint'=>11]

        ]);

        $this->forge->addPrimaryKey('id');

        $this->forge->createTable('posts');
    }

    public function down()
    {
        $this->forge->dropTable('posts');
    }
}
