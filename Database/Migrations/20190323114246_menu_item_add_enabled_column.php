<?php

namespace BasicApp\Site\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migration_menu_item_add_enabled_column extends Migration
{

    public $tableName = 'menu_item';

    public function up()
    {
        $this->forge->addColumn($this->tableName, [
            'item_enabled' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'unsigned' => true,
                'default' => 1,
                'null' => false
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn($this->tableName, 'item_enabled');
    }

}