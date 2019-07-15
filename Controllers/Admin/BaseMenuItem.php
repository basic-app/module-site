<?php

namespace BasicApp\Site\Controllers\Admin;

use BasicApp\Site\Models\Admin\MenuItemModel;

abstract class BaseMenuItem extends \BasicApp\Admin\AdminCrudController
{

	protected $modelClass = MenuItemModel::class;

	protected $viewPath = 'BasicApp\Site\Admin\MenuItem';

	protected $returnUrl = 'admin/menuItem';

	protected $parentKey = 'item_menu_id';

	protected $orderBy = 'item_sort';

	protected $perPage = null;

}