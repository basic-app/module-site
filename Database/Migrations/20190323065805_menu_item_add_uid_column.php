<?php

namespace BasicApp\Site\Database\Migrations;

class Migration_menu_item_add_uid_column extends \BasicApp\Core\Migration
{

    public $tableName = 'menu_item';

    public function up()
    {
        $this->forge->addColumn($this->tableName, [
            'item_uid' => $this->stringColumn()
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn($this->tableName, 'item_uid');
    }

}