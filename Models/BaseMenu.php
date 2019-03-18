<?php
/**
 * @package Basic App Site
 * @license MIT License
 * @link    http://basic-app.com
 */
namespace BasicApp\Site\Models;

abstract class BaseMenu extends \BasicApp\Core\Entity
{

    protected $modelClass = MenuModel::class;

	public $menu_id;

	public $menu_created_at;

	public $menu_updated_at;

	public $menu_uid;

	public $menu_name;

}