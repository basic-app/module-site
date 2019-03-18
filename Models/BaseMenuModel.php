<?php
/**
 * @package Basic App Site
 * @license MIT License
 * @link    http://basic-app.com
 */
namespace BasicApp\Site\Models;

use Config\Database;

abstract class BaseMenuModel extends \BasicApp\Core\Model
{

    protected $table = 'menu';

    protected $primaryKey = 'menu_id';

    protected $returnType = Menu::class;

    protected $allowedFields = ['menu_name', 'menu_uid'];

	protected $validationRules = [
		'menu_name' => 'trim|required|max_length[255]',
		'menu_uid' => 'trim|required|max_length[255]|alpha_dash|is_unique[menu.menu_uid,menu_id,{menu_id}]'
	];

	protected static $fieldLabels = [
		'menu_name' => 'Name',
		'menu_uid' => 'UID',
		'menu_id' => 'ID',
		'menu_created_at' => 'Created At',
		'menu_updated_at' => 'Updated At'
	];

    public static function getMenu(string $uid, bool $create = false, array $params = [])
    {
        return static::getEntity(['menu_uid' => $uid], $create, $params);
    }

	public static function install()
	{
		static $installed = false;

		if ($installed)
		{
			return;
		}

        $db = Database::connect();

        $count = $db->table('menu')->countAllResults();

        if ($count == 0)
        {
            $mainMenu = MenuModel::getMenu('main', true, ['menu_name' => 'Main Menu']);

            MenuItemModel::getEntity(
                ['item_menu_id' => $mainMenu->menu_id, 'item_url' => '/'], 
                true, 
                ['item_name' => 'Index']
            );

            MenuItemModel::getEntity(
                ['item_menu_id' => $mainMenu->menu_id, 'item_url' => '/blog'], 
                true, 
                ['item_name' => 'Blog']
            );

            MenuItemModel::getEntity(
                ['item_menu_id' => $mainMenu->menu_id, 'item_url' => '/page/about'], 
                true, 
                ['item_name' => 'About']
            );
        }

		$installed = true;
	}

}