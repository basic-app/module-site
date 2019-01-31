<?php

namespace BasicApp\Site\Controllers\Admin;

use BasicApp\Site\Models\MenuModel;

class Menu extends \BasicApp\Core\AdminCrudController
{

	protected $modelClass = MenuModel::class;

	protected $viewPath = 'BasicApp\Site\Admin\Menu';

	protected $returnUrl = 'admin/menu';

	protected $perPage = null;

}
