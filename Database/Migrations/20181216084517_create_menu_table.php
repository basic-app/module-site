<?php

namespace BasicApp\Site\Database\Migrations;

class Migration_create_menu_table extends \BasicApp\Core\Migration
{

	public $tableName = 'menu';

	public function up()
	{
		$this->forge->addField([
			'menu_id' => $this->primaryKeyColumn(),
			'menu_created_at' => $this->createdColumn(),
			'menu_updated_at' => $this->updatedColumn(),
			'menu_uid' => $this->stringColumn(['unique' => true]),
			'menu_name' => $this->stringColumn()
		]);

		$this->forge->addKey('menu_id', true);

		$this->createTable($this->tableName);
	}

	public function down()
	{
		$this->dropTable($this->tableName);
	}

}