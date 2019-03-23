<?php

namespace BasicApp\Site\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migration_menu_item_add_class_column extends Migration
{

    public $tableName = 'menu_item';

    public function up()
    {
        $this->forge->addColumn($this->tableName, [
            'item_class' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null
            ]
        ]);
    }

    public function down()
    {
       $this->forge->dropColumn($this->tableName, 'item_class');
    }

}