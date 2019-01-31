<?php

namespace BasicApp\Site\Controllers\Admin;

use BasicApp\Site\Models\BlockModel;

class Block extends \BasicApp\Core\AdminCrudController
{

	protected $modelClass = BlockModel::class;

	protected $viewPath = 'BasicApp\Site\Admin\Block';

	protected $returnUrl = 'admin/block';

}
