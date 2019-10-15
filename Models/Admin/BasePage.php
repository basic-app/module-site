<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Site\Models\Admin;

abstract class BasePage extends \BasicApp\Site\Models\Page
{

    protected $modelClass = PageModel::class;

	public function getFormattedPublished()
	{
		return $this->page_published ? t('attribute', 'Published') : t('attribute', 'Not Published');
	}

}