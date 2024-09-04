<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLikeTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>['type'=>'INT','constraint'=>11,'unsigned'=>true,'auto_increment'=>true],
            'created_at'=>['type'=>'DATETIME'],
            'user_id'=>['type'=>'INT','constraint'=>11],
            'post_id'=>['type'=>'INT','constraint'=>11],
        ]);

        $this->forge->addPrimaryKey('id');

        $this->forge->createTable('likes');
    }

    public function down()
    {
        $this->forge->dropTable('likes');
    }
}
