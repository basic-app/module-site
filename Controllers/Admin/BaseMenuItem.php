<?php

namespace BasicApp\Site\Controllers\Admin;

use BasicApp\Site\Models\MenuItemModel;

abstract class BaseMenuItem extends \BasicApp\Core\AdminCrudController
{

	protected $modelClass = MenuItemModel::class;

	protected $viewPath = 'BasicApp\Site\Admin\MenuItem';

	protected $returnUrl = 'admin/menuItem';

	protected $parentField = 'item_menu_id';

	protected $orderBy = 'item_sort';

	protected $perPage = null;

}