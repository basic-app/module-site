<?php

namespace BasicApp\Site\Controllers\Admin;

class Page extends \BasicApp\AdminCrudController
{

	protected $modelClass = \BasicApp\Site\Models\Page::class;

	protected $viewPath = 'BasicApp\Site\Views\Admin\Page';

	protected $returnUrl = 'admin/page';

    protected $orderBy = 'page_url ASC';

}
