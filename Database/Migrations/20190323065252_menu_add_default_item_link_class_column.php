<?php

namespace BasicApp\Site\Database\Migrations;

class Migration_menu_add_default_item_link_class_column extends \BasicApp\Core\Migration
{

    public $tableName = 'menu';

    public function up()
    {
        $this->createColumn($this->tableName, [
            'menu_default_item_link_class' => $this->stringColumn()
        ]);
    }

    public function down()
    {
        $this->dropColumn($this->tableName, 'menu_default_item_link_class');
    }

}