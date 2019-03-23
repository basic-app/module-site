<?php

namespace BasicApp\Site\Database\Migrations;

use CodeIgniter\Database\Migration;
use Config\Database;

class Migration_create_pages_table extends Migration
{

	public $tableName = 'pages';

	public function up()
	{
		$this->forge->addField([
			'page_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true
			],
			'page_created_at' => [
				'type' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
				'null' => true
			],
			'page_updated_at' => [
				'type' => 'TIMESTAMP NULL',
				'default' => null
			],
			'page_url' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'unique' => true,
				'null' => true,
				'default' => null
			],
			'page_name' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true
			],
			'page_text' => [
				'type' => 'TEXT',
				'null' => true
			],
			'page_published' => [
				'type' => 'INT',
				'constraint' => 1,
				'unsigned' => true,
				'null' => false,
				'default' => 0
			]
		]);

		$this->forge->addKey('page_id', true);

		$this->forge->addKey('page_published');

		$this->forge->createTable($this->tableName, false, ['ENGINE' => 'InnoDB']);
	}

	public function down()
	{
		$this->forge->dropTable($this->tableName);
	}

}