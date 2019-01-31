<?php

namespace BasicApp\Site\Models;

class MenuEntity extends \BasicApp\Core\Entity
{

    protected $modelClass = MenuModel::class;

	public $menu_id;

	public $menu_created_at;

	public $menu_updated_at;

	public $menu_uid;

	public $menu_name;

}