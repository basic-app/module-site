<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Site\Controllers\Admin;

use BasicApp\Site\Models\Admin\BlockModel;

abstract class BaseBlock extends \BasicApp\Admin\AdminCrudController
{

	protected $modelClass = BlockModel::class;

	protected $viewPath = 'BasicApp\Site\Admin\Block';

	protected $returnUrl = 'admin/block';

}