<?php

namespace BasicApp\Site\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migration_menu_item_rename_column_link_html_class extends Migration
{

    public $tableName = 'menu_item';

	public function up()
	{
        $this->forge->modifyColumn($this->tableName, [
            'link_html_class' => [
                'name' => 'item_link_html_class',
                'type' => 'VARCHAR',
                'constraint' => 255
            ]
        ]);
	}

	public function down()
	{
        $this->forge->modifyColumn($this->tableName, [
            'item_link_html_class' => [
                'name' => 'link_html_class',
                'type' => 'VARCHAR',
                'constraint' => 255
            ]
        ]);

	}

}