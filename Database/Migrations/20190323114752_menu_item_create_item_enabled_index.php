<?php

namespace BasicApp\Site\Database\Migrations;

class Migration_menu_item_create_item_enabled_index extends \BasicApp\Core\Migration
{

    public $tableName = 'menu_item';

    public $keyName = 'menu_item';

    public function up()
    {
        $this->tableAddKey($this->tableName, $this->keyName . '_item_enabled_index', ['item_enabled'], false, true);
    }

    public function down()
    {
        $this->tableDropKey($this->tableName, $this->keyName . '_item_enabled_index');
    }

}