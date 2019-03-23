<?php

namespace BasicApp\Site\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migration_menu_add_default_item_icon_column extends Migration
{

    public $tableName = 'menu';

    public function up()
    {
        $this->forge->addColumn($this->tableName, [
            'menu_default_item_icon' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn($this->tableName, 'menu_default_item_icon');
    }

}