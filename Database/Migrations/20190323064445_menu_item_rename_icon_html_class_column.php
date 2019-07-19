<?php

namespace BasicApp\Site\Database\Migrations;

class Migration_menu_item_rename_icon_html_class_column extends \BasicApp\Core\Migration
{

    public $tableName = 'menu_item';

    public function up()
    {
        $this->modifyColumn($this->tableName, [
            'item_icon_html_class' => $this->stringColumn([
                'name' => 'item_icon'
            ])
        ]);
    }

    public function down()
    {
        $this->modifyColumn($this->tableName, [
            'item_icon' => $this->stringColumn([
                'name' => 'item_icon_html_class'
            ])
        ]);
    }

}