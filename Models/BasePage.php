<?php
/**
 * @package Basic App Site
 * @license MIT License
 * @link    http://basic-app.com
 */
namespace BasicApp\Site\Models;

abstract class BasePage extends \BasicApp\Core\Entity
{

    protected $modelClass = PageModel::class;

	protected $page_id;

	protected $page_created_at;

	protected $page_updated_at;

	protected $page_url = '';

	protected $page_name = '';

	protected $page_text = '';

	protected $page_published = 1;

    public function setMetaTags($view = null)
    {
        PageModel::pageSetMetaTags($this, $view);
    }

}
