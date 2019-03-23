<?php

namespace BasicApp\Site\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migration_menu_item_rename_icon_html_class_column extends Migration
{

    public $tableName = 'menu_item';

    public function up()
    {
        $this->forge->modifyColumn($this->tableName, [
            'item_icon_html_class' => [
                'name' => 'item_icon',
                'type' => 'VARCHAR',
                'constraint' => 255
            ]
        ]);
    }

    public function down()
    {
        $this->forge->modifyColumn($this->tableName, [
            'item_icon' => [
                'name' => 'item_icon_html_class',
                'type' => 'VARCHAR',
                'constraint' => 255
            ]
        ]);
    }

}