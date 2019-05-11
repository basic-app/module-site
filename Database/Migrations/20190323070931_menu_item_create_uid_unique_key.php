<?php

namespace BasicApp\Site\Database\Migrations;

class Migration_menu_item_create_uid_unique_key extends \BasicApp\Core\Migration
{

    public $tableName = 'menu_item';

    public $keyName = 'menu_item';

    public function up()
    {
        $this->tableAddKey($this->tableName, $this->keyName . '_item_uid_unique', ['item_uid', 'item_menu_id'], false, true);
    }

    public function down()
    {
        $this->tableDropKey($this->tableName, $this->keyName . '_item_uid_unique');
    }

}