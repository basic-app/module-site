<?php
/**
 * @package Basic App Site
 * @license MIT License
 * @link    http://basic-app.com
 */
namespace BasicApp\Site\Models\Admin;

abstract class BaseBlockModel extends \BasicApp\Site\Models\BlockModel
{

    protected $returnType = Block::class;

	protected $allowedFields = [
		'block_uid',
		'block_content'
	];

	protected $validationRules = [
		'block_uid' => 'trim|required|max_length[255]|required',
		'block_content' => 'trim|max_length[65535]'
	];

}