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
		'menu_name' => 'required|max_length[255]',
		'menu_uid' => 'required|max_length[255]|alpha_dash|is_unique[menu.menu_uid,menu_id,{menu_id}]',
        'menu_item_icon' => 'max_length[255]',
        'menu_item_class' => 'max_length[255]',
        'menu_item_link_class' => 'max_length[255]'
	];

}