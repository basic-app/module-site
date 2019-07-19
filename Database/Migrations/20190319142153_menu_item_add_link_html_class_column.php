<?php

namespace BasicApp\Site\Database\Migrations;

class Migration_menu_item_add_link_html_class_column extends \BasicApp\Core\Migration
{

    public $tableName = 'menu_item';

    public function up()
    {
        $this->createColumn($this->tableName, [
            'link_html_class' => $this->stringColumn()
        ]);
    }

    public function down()
    {
        $this->dropColumn($this->tableName, 'link_html_class');
    }

}