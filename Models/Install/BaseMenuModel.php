<?php
/**
 * @package Basic App Site
 * @license MIT License
 * @link    http://basic-app.com
 */
namespace BasicApp\Site\Models\Install;

use Config\Database;
use BasicApp\Site\Models\MenuModel;
use BasicApp\Site\Models\MenuItemModel;

abstract class BaseMenuModel
{

	public static function install()
	{
		static $installed = false;

		if ($installed)
		{
			return;
		}

        $db = Database::connect();

        //$count = $db->table('menu')->countAllResults();

        if (!MenuModel::getMenu('main', false))
        {
            $mainMenu = MenuModel::getMenu('main', true, ['menu_name' => 'Main Menu']);

            MenuItemModel::getEntity(
                ['item_menu_id' => $mainMenu->menu_id, 'item_url' => '/'], 
                true, 
                [
                    'item_name' => 'Index',
                    'item_enabled' => 1
                ]
            );

            MenuItemModel::getEntity(
                ['item_menu_id' => $mainMenu->menu_id, 'item_url' => '/blog'], 
                true, 
                [
                    'item_name' => 'Blog',
                    'item_enabled' => 1
                ]
            );

            MenuItemModel::getEntity(
                ['item_menu_id' => $mainMenu->menu_id, 'item_url' => '/page/about'], 
                true, 
                [
                    'item_name' => 'About',
                    'item_enabled' => 1
                ]
            );
        }

		$installed = true;
	}

}