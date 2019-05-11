<?php

namespace BasicApp\Site\Database\Migrations;

class Migration_menu_item_rename_column_link_html_class extends \BasicApp\Core\Migration
{

    public $tableName = 'menu_item';

	public function up()
	{
        $this->forge->modifyColumn($this->tableName, [
            'link_html_class' => $this->stringColumn([
                'name' => 'item_link_html_class'
            ])
        ]);
	}

	public function down()
	{
        $this->forge->modifyColumn($this->tableName, [
            'item_link_html_class' => $this->stringColumn([
                'name' => 'link_html_class' 
            ])
        ]);
	}

}