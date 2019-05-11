<?php

namespace BasicApp\Site\Database\Migrations;

class Migration_menu_item_create_uid_unique_key extends \BasicApp\Core\Migration
{

    public $tableName = 'menu_item';

    public $columns = ['item_uid', 'item_menu_id'];

    public function up()
    {
        $this->tableAddKey($this->tableName, $this->columns, false, true);
    }

    public function down()
    {
        $this->tableDropKey($this->tableName, $this->keyName($this->tableName, $this->columns));
    }

}