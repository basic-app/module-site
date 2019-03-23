<?php
/**
 * @package Basic App Site
 * @license MIT License
 * @link    http://basic-app.com
 */
namespace BasicApp\Site\Models;

abstract class BaseMenuItem extends \BasicApp\Core\Entity
{

    protected $modelClass = MenuItemModel::class;

	public $item_id;

	public $item_created_at;

	public $item_updated_at;

	public $item_url;

	public $item_name;

	public $item_menu_id;

	public $item_sort = null;

    public $item_class;

    public $item_link_class;

    public $item_icon;

    public $item_uid;

    public $item_enabled;

}