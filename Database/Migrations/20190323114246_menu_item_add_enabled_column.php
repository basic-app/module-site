<?php

namespace BasicApp\Site\Database\Migrations;

class Migration_menu_item_add_enabled_column extends \BasicApp\Core\Migration
{

    public $tableName = 'menu_item';

    public function up()
    {
        $this->createColumn($this->tableName, [
            'item_enabled' => $this->booleanColumn()
        ]);
    }

    public function down()
    {
        $this->dropColumn($this->tableName, 'item_enabled');
    }

}