<?php

namespace BasicApp\Site\Controllers;

use BasicApp\Site\Models\PageModel;
use CodeIgniter\Exceptions\PageNotFoundException;

abstract class BasePage extends \BasicApp\Core\PublicController
{

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

        $template = 'page';

        if ($page->page_url == 'index')
        {
            $template = 'index';
        }
        else
        {
            $filename = APPPATH . 'Views' . DIRECTORY_SEPARATOR . 'page' . DIRECTORY_SEPARATOR . $page->page_url . '.php';

            if (is_file($filename))
            {
                $template = 'page/' . $page->page_url;
            }
        }

		return $this->render($template, [
			'page' => $page
		]);
	}

}
