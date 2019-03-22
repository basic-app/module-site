<?php
/**
 * @package Basic App Site
 * @license MIT License
 * @link    http://basic-app.com
 */
namespace BasicApp\Site\Models\Install;

use Config\Database;
use BasicApp\Site\Models\PageModel;

abstract class BasePageModel
{

	public static function install()
	{
		static $installed = false;

		if ($installed)
		{
			return;
		}

        $db = Database::connect();

		$count = $db->table('pages')->countAllResults();

		if ($count == 0)
		{
            PageModel::getPage('index', true, [
                'page_name' => 'Index',
                'page_text' => '<p>Index page text.</p>',
                'page_published' => 1
            ]);

            PageModel::getPage('about', true, [
                'page_name' => 'About',
                'page_text' => '<p>About page text.</p>',
                'page_published' => 1
            ]);            
		}

        $installed = true;
	}

}