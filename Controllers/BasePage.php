<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Site\Controllers;

use BasicApp\Site\Models\PageModel;
use CodeIgniter\Exceptions\PageNotFoundException;

abstract class BasePage extends \BasicApp\System\Controller
{

    protected $viewPath = 'BasicApp\Site\Page';

	public function view($url = 'index')
	{
		$pageModel = new PageModel;

		$page = $pageModel
				->where('page_url', $url)
				->where('page_published', 1)
				->first();

		if (!$page)
		{
			throw new PageNotFoundException();
		}

        if (is_file(APPPATH . 'Views/BasicApp/Site/Page/' . $page->page_url . '.php'))
        {
            $template = $page->page_url;
        }
        else
        {
            $template = '_view';
        }

        return $this->render($template, [
            'page' => $page
        ]);
	}

}
