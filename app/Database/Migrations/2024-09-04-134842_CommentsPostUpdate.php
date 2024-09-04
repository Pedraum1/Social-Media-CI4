<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CommentsPostUpdate extends Migration
{
    public function up()
    {
        $fields = [
            'type'=>[
                'TYPE'=>'INT',
                'constraint'=>11,
                'after'=>'deleted_at',
                'null'=>false,
                'default'=>1,
            ],
            'original_id'=>[
                'type'=>'INT',
                'constraint'=>11,
                'after'=>'id'
            ]
        ];

        $this->forge->addColumn('posts',$fields);
    }

    public function down()
    {
        $this->forge->dropColumn('posts',['type','original_id']);
    }
}
