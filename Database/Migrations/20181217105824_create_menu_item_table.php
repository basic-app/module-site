<?php

namespace BasicApp\Site\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migration_create_menu_item_table extends Migration
{

	public $tableName = 'menu_item';

	public function up()
	{
		$this->forge->addField([
			'item_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true
			],
			'item_created_at' => [
				'type' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
				'null' => true
			],
			'item_updated_at' => [
				'type' => 'TIMESTAMP NULL',
				'default' => null
			],
			'item_menu_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'null' => true,
				'default' => null
			],
			'item_name' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true
			],
			'item_url' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true
			],			
			'item_sort' => [
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => true,
				'null' => true
			]
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