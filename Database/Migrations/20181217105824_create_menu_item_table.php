<?php

namespace BasicApp\Site\Database\Migrations;

class Migration_create_menu_item_table extends \BasicApp\Core\Migration
{

	public $tableName = 'menu_item';

	public function up()
	{
		$this->forge->addField([
			'item_id' => $this->primaryColumn(),
			'item_created_at' => $this->createdColumn(),
			'item_updated_at' => $this->updatedColumn(),
			'item_menu_id' => $this->foreignColumn(),
			'item_name' => $this->stringColumn(),
			'item_url' => $this->stringColumn(),
			'item_sort' => $this->sortColumn()
		]);

		$this->forge->addKey('item_id', true);

		$this->forge->addForeignKey('item_menu_id', 'menu', 'menu_id', 'RESTRICT', 'RESTRICT');

		$this->forge->createTable($this->tableName, false, ['ENGINE' => 'InnoDB']);
	}

	public function down()
	{
		$this->forge->dropTable($this->tableName);
	}

}