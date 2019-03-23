<?php

namespace BasicApp\Site\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migration_create_menu_table extends Migration
{

	public $tableName = 'menu';

	public function up()
	{
		$this->forge->addField([
			'menu_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true
			],
			'menu_created_at' => [
				'type' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
				'null' => true
			],
			'menu_updated_at' => [
				'type' => 'TIMESTAMP NULL',
				'default' => null
			],
			'menu_uid' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
				'default' => null,
				'unique' => true
			],
			'menu_name' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
				'default' => null
			]
		]);

		$this->forge->addKey('menu_id', true);

		$this->forge->createTable($this->tableName, false, ['ENGINE' => 'InnoDB']);	
	}

	public function down()
	{
		$this->forge->dropTable($this->tableName, false);
	}

}