<?php
/**
 * @package Basic App Site
 * @license MIT License
 * @link    http://basic-app.com
 */
namespace BasicApp\Site\Models;

use Config\Database;
use Config\Services;

abstract class BasePageModel extends \BasicApp\Core\Model
{

	protected $table = 'pages';

	protected $primaryKey = 'page_id';

	protected static $fieldLabels = [
		'page_id' => 'ID',
		'page_url' => 'URL',
		'page_name' => 'Name',
		'page_created_at' => 'Created',
		'page_updated_at' => 'Updated',
		'page_text' => 'Text',
		'page_published' => 'Publication'
	];

	protected $returnType = Page::class;

	protected $useTimestamps = true;

	protected $createdField = 'page_created_at';

	protected $updatedField = 'page_updated_at';

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

    public static function getPage(string $url, bool $create = false, array $params = [])
    {
        return static::getEntity(['page_url' => $url], $create, $params);
    }

    public static function pageSetMetaTags($page, $view = null)
    {
        if (!$view)
        {
            $view = Services::renderer();
        }

        $view->setVar('title', $page->page_name);
    }

}