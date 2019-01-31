<?php

namespace BasicApp\Site\Controllers\Admin;

class MenuItem extends \BasicApp\Core\AdminCrudController
{

	protected $modelClass = \BasicApp\Site\Models\MenuItem::class;

	protected $viewPath = 'BasicApp\Site\Views\Admin\MenuItem';

	protected $returnUrl = 'admin/menuItem';

	protected $parentField = 'item_menu_id';

	protected $orderBy = 'item_sort';

	protected $perPage = null;

}
