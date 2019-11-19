<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
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
		'block_uid' => 'not_special_chars|required|max_length[255]|is_unique[blocks.block_uid,block_id,{block_id}]',
		'block_content' => 'html_purifier|max_length[65535]'
	];

}