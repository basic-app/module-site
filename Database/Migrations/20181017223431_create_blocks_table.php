<?php

namespace BasicApp\Site\Database\Migrations;

class Migration_create_blocks_table extends \BasicApp\Core\Migration
{

e	public $tableName = 'blocks';

	public function up()
	{
		$this->forge->addField([
			'block_id' => $this->primaryColumn(),
			'block_created_at' => $this->createdColumn(),
			'block_updated_at' => $this->updatedColumn(),
			'block_uid' => $this->stringColumn(['unique' => true]),
			'block_content' => $this->textColumn()
		]);

		$this->forge->addKey('block_id', true);

		$this->forge->createTable($this->tableName, false, ['ENGINE' => 'InnoDB']);
	}

	public function down()
	{
		$this->forge->dropTable($this->tableName);
	}

}