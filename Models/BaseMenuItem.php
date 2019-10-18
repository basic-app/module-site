<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Site\Models;

abstract class BaseMenuItem extends \BasicApp\Core\Entity
{

    protected $modelClass = MenuItemModel::class;

    public function __construct()
    {
        parent::__construct();

        $this->item_enabled = true;
    }

}