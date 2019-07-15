<?php

namespace BasicApp\Site\Controllers\Admin;

use BasicApp\Site\Models\Admin\MenuModel;

abstract class BaseMenu extends \BasicApp\Admin\AdminCrudController
{

	protected $modelClass = MenuModel::class;

	protected $viewPath = 'BasicApp\Site\Admin\Menu';

	protected $returnUrl = 'admin/menu';

	protected $perPage = null;

}