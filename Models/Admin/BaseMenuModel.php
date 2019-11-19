<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Site\Models\Admin;

abstract class BaseMenuModel extends \BasicApp\Site\Models\MenuModel
{

    protected $returnType = Menu::class;

    protected $allowedFields = [
        'menu_name', 
        'menu_uid',
        'menu_item_icon',
        'menu_item_class',
        'menu_item_link_class'
    ];

	protected $validationRules = [
		'menu_name' => 'not_special_chars|required|max_length[255]',
		'menu_uid' => 'not_special_chars|required|max_length[255]|alpha_dash|is_unique[menu.menu_uid,menu_id,{menu_id}]',
        'menu_item_icon' => 'not_special_chars|max_length[255]',
        'menu_item_class' => 'not_special_chars|max_length[255]',
        'menu_item_link_class' => 'not_special_chars|max_length[255]'
	];

}