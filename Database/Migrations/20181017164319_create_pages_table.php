<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Site\Database\Migrations;

class Migration_create_pages_table extends \BasicApp\Core\Migration
{

	public $tableName = 'pages';

	public function up()
	{
		$this->forge->addField([
			'page_id' => $this->primaryKey()->toArray(),
			'page_created_at' => $this->created()->toArray(),
			'page_updated_at' => $this->updated()->toArray(),
			'page_url' => $this->string()->unique()->toArray(),
			'page_name' => $this->string()->toArray(),
			'page_text' => $this->text()->toArray(),
			'page_published' => $this->boolean()->toArray()
		]);

		$this->forge->addKey('page_id', true);

		$this->forge->addKey('page_published');

		$this->forge->createTable($this->tableName);
	}

	public function down()
	{
		$this->forge->dropTable($this->tableName);
	}

}