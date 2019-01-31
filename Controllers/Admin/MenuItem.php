<?php

namespace BasicApp\Site\Controllers\Admin;

use BasicApp\Site\Models\MenuItemModel;

class MenuItem extends \BasicApp\Core\AdminCrudController
{

	protected $modelClass = MenuItemModel::class;

	protected $viewPath = 'BasicApp\Site\Admin\MenuItem';

	protected $returnUrl = 'admin/menuItem';

	protected $parentField = 'item_menu_id';

	protected $orderBy = 'item_sort';

	protected $perPage = null;

}
