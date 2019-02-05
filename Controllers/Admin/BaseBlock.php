<?php

namespace BasicApp\Site\Controllers\Admin;

use BasicApp\Site\Models\BlockModel;

abstract class BaseBlock extends \BasicApp\Core\AdminCrudController
{

	protected $modelClass = BlockModel::class;

	protected $viewPath = 'BasicApp\Site\Admin\Block';

	protected $returnUrl = 'admin/block';

}