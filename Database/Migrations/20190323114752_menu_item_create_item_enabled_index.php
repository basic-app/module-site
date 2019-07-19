<?php

namespace BasicApp\Site\Database\Migrations;

class Migration_menu_item_create_item_enabled_index extends \BasicApp\Core\Migration
{

    public $tableName = 'menu_item';

    public function up()
    {
        $this->createIndex($this->tableName, ['item_enabled']);
    }

    public function down()
    {
        $this->dropIndex($this->tableName, ['item_enabled']);
    }

}