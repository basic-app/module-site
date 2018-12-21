<?php

namespace BasicApp\Site\Controllers\Admin;

class Menu extends \App\Crud\AdminCrudController
{

	protected $modelClass = \BasicApp\Site\Models\Menu::class;

	protected $viewPath = 'BasicApp\Site\Views\Admin\Menu';

	protected $returnUrl = 'admin/menu';

	protected $perPage = null;

}
