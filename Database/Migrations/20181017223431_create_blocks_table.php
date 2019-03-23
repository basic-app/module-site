<?php

namespace BasicApp\Site\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migration_create_blocks_table extends Migration
{

	public $tableName = 'blocks';

	public function up()
	{
		$this->forge->addField([
			'block_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true
			],
			'block_created_at' => [
				'type' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
				'null' => true
			],
			'block_updated_at' => [
				'type' => 'TIMESTAMP NULL',
				'default' => null
			],
			'block_uid' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'unique' => true,
				'null' => true,
				'default' => null
			],
			'block_content' => [
				'type' => 'TEXT',
				'null' => true
			]
		]);

		$this->forge->addKey('block_id', true);

		$this->forge->createTable($this->tableName, false, ['ENGINE' => 'InnoDB']);
	}

	public function down()
	{
		$this->forge->dropTable($this->tableName);
	}

}