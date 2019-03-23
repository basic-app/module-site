<?php

namespace BasicApp\Site\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migration_menu_item_add_uid_column extends Migration
{

    public $tableName = 'menu_item';

    public function up()
    {
        $this->forge->addColumn($this->tableName, [
            'item_uid' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn($this->tableName, 'item_uid');
    }

}