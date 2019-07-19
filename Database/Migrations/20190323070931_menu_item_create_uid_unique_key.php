<?php

namespace BasicApp\Site\Database\Migrations;

class Migration_menu_item_create_uid_unique_key extends \BasicApp\Core\Migration
{

    public $tableName = 'menu_item';

    public function up()
    {
        $this->createUniqueKey($this->tableName, ['item_uid', 'item_menu_id']);
    }

    public function down()
    {
        $this->dropUniqueKey($this->tableName, ['item_uid', 'item_menu_id']);
    }

}