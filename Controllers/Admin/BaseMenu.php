<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Site\Controllers\Admin;

use BasicApp\Site\Models\Admin\MenuModel;

abstract class BaseMenu extends \BasicApp\Admin\AdminCrudController
{

	protected $modelClass = MenuModel::class;

	protected $viewPath = 'BasicApp\Site\Admin\Menu';

	protected $returnUrl = 'admin/menu';

	protected $perPage = null;

}