<?php

namespace BasicApp\Site\Models;

class Page extends \BasicApp\Model
{

	protected $table = 'pages';

	protected $primaryKey = 'page_id';

	protected $allowedFields = [
		'page_url',
		'page_name',
		'page_text',
		'page_published'
	];

	protected $validationRules = [
		'page_name' => 'trim|max_length[255]|required',
		'page_url' => 'trim|max_length[255]|required',
		'page_text' => 'trim|max_length[65535]',
		'page_published' => 'in_list[0,1]'
	];

	protected static $fieldLabels = [
		'page_id' => 'ID',
		'page_url' => 'URL',
		'page_name' => 'Name',
		'page_created_at' => 'Created',
		'page_updated_at' => 'Updated',
		'page_text' => 'Text',
		'page_published' => 'Publication'
	];

	protected $returnType = PageEntity::class;

	protected $useTimestamps = true;

	protected $createdField = 'page_created_at';

	protected $updatedField = 'page_updated_at';

}
