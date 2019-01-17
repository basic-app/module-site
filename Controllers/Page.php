<?php

namespace BasicApp\Site\Controllers;

use BasicApp\Site\Models\Page as PageModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Page extends \BasicApp\PublicController
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

		return $this->render($page->template, [
			'page' => $page
		]);
	}

}
