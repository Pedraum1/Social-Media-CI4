<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>['type'=>'INT','constraint'=>11,'unsigned'=>true,'auto_increment'=>true],

            'created_at'=>['type'=>'DATETIME'],
            'updated_at'=>['type'=>'DATETIME'],
            'deleted_at'=>['type'=>'DATETIME'],

            'name'=>['type'=>'VARCHAR','constraint'=>35],
            'description'=>['type'=>'TEXT'],
            'followers'=>['type'=>'INT',"constraint"=>11],
            'following'=>['type'=>'INT',"constraint"=>11],
            'tag'=>['type'=>'VARCHAR','constraint'=>20],
        ]);

        $this->forge->addPrimaryKey('id');

        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
