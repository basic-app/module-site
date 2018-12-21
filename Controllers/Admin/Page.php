<?php

namespace BasicApp\Site\Controllers\Admin;

class Page extends \App\Crud\AdminCrudController
{

	protected $modelClass = \BasicApp\Site\Models\Page::class;

	protected $viewPath = 'Modules\Site\Views\Admin\Page';

	protected $returnUrl = 'admin/page';

    protected $orderBy = 'page_url ASC';

}
