<?php

namespace BasicApp\Site\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migration_menu_item_rename_link_html_class_column extends Migration
{

    public $tableName = 'menu_item';

    public function up()
    {
        $this->forge->modifyColumn($this->tableName, [
            'item_link_html_class' => [
                'name' => 'item_link_class',
                'type' => 'VARCHAR',
                'constraint' => 255
            ]
        ]);
    }

    public function down()
    {
        $this->forge->modifyColumn($this->tableName, [
            'item_link_class' => [
                'name' => 'item_link_html_class',
                'type' => 'VARCHAR',
                'constraint' => 255
            ]
        ]);
    }

}