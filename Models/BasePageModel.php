<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Site\Models;

use Config\Database;
use Config\Services;

abstract class BasePageModel extends \BasicApp\Core\Model
{

	protected $table = 'pages';

	protected $primaryKey = 'page_id';

	protected $labels = [
		'page_id' => 'ID',
		'page_url' => 'URL',
		'page_name' => 'Name',
		'page_created_at' => 'Created',
		'page_updated_at' => 'Updated',
		'page_text' => 'Text',
		'page_published' => 'Publication'
	];

    protected $translations = 'pages';

	protected $returnType = Page::class;

	protected $useTimestamps = true;

	protected $createdField = 'page_created_at';

	protected $updatedField = 'page_updated_at';

    public static function getPage(string $url, bool $create = false, array $params = [])
    {
        return static::getEntity(['page_url' => $url], $create, $params);
    }

    public static function setPageMetaTags($page, $view = null)
    {
        if (!$view)
        {
            $view = Services::renderer();
        }

        $view->setVar('title', $page->page_name);
    }

}