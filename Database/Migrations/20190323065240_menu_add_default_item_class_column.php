<?php

namespace BasicApp\Site\Database\Migrations;

class Migration_menu_add_default_item_class_column extends \BasicApp\Core\Migration
{

    public $tableName = 'menu';

    public function up()
    {
        $this->forge->addColumn($this->tableName, [
            'menu_default_item_class' => $this->stringColumn()
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn($this->tableName, 'menu_default_item_class');
    }

}