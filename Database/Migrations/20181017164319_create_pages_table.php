<?php

namespace BasicApp\Site\Database\Migrations;

class Migration_create_pages_table extends \BasicApp\Core\Migration
{

	public $tableName = 'pages';

	public function up()
	{
		$this->forge->addField([
			'page_id' => $this->primaryKeyColumn(),
			'page_created_at' => $this->createdColumn(),
			'page_updated_at' => $this->updatedColumn(),
			'page_url' => $this->stringColumn(['unique' => true]),
			'page_name' => $this->stringColumn(),
			'page_text' => $this->textColumn(),
			'page_published' => $this->booleanColumn()
		]);

		$this->forge->addKey('page_id', true);

		$this->forge->addKey('page_published');

		$this->createTable($this->tableName, false, ['ENGINE' => 'InnoDB']);
	}

	public function down()
	{
		$this->dropTable($this->tableName);
	}

}