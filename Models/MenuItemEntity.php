<?php

namespace BasicApp\Site\Models;

class MenuItemEntity extends \CodeIgniter\Entity
{

	public $item_id;

	public $item_created_at;

	public $item_updated_at;

	public $item_url;

	public $item_name;

	public $item_menu_id;

	public $item_html_class;

	public $item_sort = null;

}