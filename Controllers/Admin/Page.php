<?php

namespace BasicApp\Site\Controllers\Admin;

use BasicApp\Site\Models\PageModel;

class Page extends \BasicApp\Core\AdminCrudController
{

	protected $modelClass = PageModel::class;

	protected $viewPath = 'BasicApp\Site\Admin\Page';

	protected $returnUrl = 'admin/page';

    protected $orderBy = 'page_url ASC';

}
