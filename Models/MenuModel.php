<?php

namespace BasicApp\Site\Models;

class MenuModel extends \BasicApp\Core\Model
{

    protected $table = 'menu';

    protected $primaryKey = 'menu_id';

    protected $returnType = MenuEntity::class;

    protected $allowedFields = ['menu_name', 'menu_uid'];

	protected $validationRules = [
		'menu_name' => 'trim|required|max_length[255]',
		'menu_uid' => 'trim|required|max_length[255]|alpha_dash|is_unique[menu.menu_uid,menu_id,{menu_id}]'
	];

	protected static $fieldLabels = [
		'menu_name' => 'Name',
		'menu_uid' => 'UID',
		'menu_id' => 'ID',
		'menu_created_at' => 'Created At',
		'menu_updated_at' => 'Updated At'
	];

	public static function install()
	{
		static $installed = false;

		if ($installed)
		{
			return;
		}

		$installed = true;
	}	

}