<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateArticles extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [
                'type' => "INT",
                "null" => false,
                "auto_increment" =>true ],
                "title" =>[
                    'type' => "VARCHAR",
                    "null" => false,
                    "constraint" =>128],
                    "content" => [
                        'type' =>'text',
                        "null" =>'true'
                    ]
                

            
                    ]);
                    $this->forge->addPrimaryKey('id');
                    $this->forge->createTable("article");
    }

    public function down()
    {
        $this->forge->dropTable("article");
    }
}
