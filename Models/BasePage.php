<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Site\Models;

abstract class BasePage extends \BasicApp\Core\Entity
{

    protected $modelClass = PageModel::class;

    public function __construct()
    {
        parent::__construct();

        $this->page_published = 1;
    }

    public function setMetaTags($view = null)
    {
        PageModel::setPageMetaTags($this, $view);
    }

}
