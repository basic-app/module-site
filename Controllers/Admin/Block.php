<?php

namespace BasicApp\Site\Controllers\Admin;

class Block extends \BasicApp\Core\AdminCrudController
{

	protected $modelClass = \BasicApp\Site\Models\Block::class;

	protected $viewPath = 'BasicApp\Site\Admin\Block';

	protected $returnUrl = 'admin/block';

}
