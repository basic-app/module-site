<?php
/**
 * @package Basic App Site
 * @license MIT License
 * @link    http://basic-app.com
 */
namespace BasicApp\Site\Models\Admin;

abstract class BasePageModel extends \BasicApp\Site\Models\PageModel
{

    protected $returnType = Page::class;

	protected $allowedFields = [
		'page_url',
		'page_name',
		'page_text',
		'page_published'
	];

	protected $validationRules = [
		'page_name' => 'trim|max_length[255]|required',
		'page_url' => 'trim|max_length[255]|is_unique[pages.page_url,page_id,{page_id}]required',
		'page_text' => 'trim|max_length[65535]',
		'page_published' => 'in_list[0,1]'
	];

}