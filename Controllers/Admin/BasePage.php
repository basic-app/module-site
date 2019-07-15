<?php

namespace BasicApp\Site\Controllers\Admin;

use BasicApp\Site\Models\Admin\PageModel;

abstract class BasePage extends \BasicApp\Admin\AdminCrudController
{

	protected $modelClass = PageModel::class;

	protected $viewPath = 'BasicApp\Site\Admin\Page';

	protected $returnUrl = 'admin/page';

    protected $orderBy = 'page_url ASC';

}