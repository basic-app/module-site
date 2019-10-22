<?php

namespace BasicApp\Site\Database\Seeds;

use BasicApp\Site\Models\MenuModel;
use BasicApp\Site\Models\MenuItemModel;
use BasicApp\Site\Models\PageModel;
use BasicApp\Site\SiteEvents;

class SiteSeeder extends \CodeIgniter\Database\Seeder
{

    public function run()
    {
        $created = false;

        if (!PageModel::getPage('index', false))
        {
            PageModel::getPage('index', true, [
                'page_name' => 'Index',
                'page_text' => '<p>Index page text.</p>',
                'page_published' => 1
            ]);

            $mainMenu = MenuModel::getMenu('main', true, ['menu_name' => 'Main Menu']);

            MenuItemModel::getEntity(
                ['item_menu_id' => $mainMenu->menu_id, 'item_url' => '/'], 
                true, 
                [
                    'item_name' => 'Index',
                    'item_enabled' => 1,
                    'item_sort' => 1
                ]
            );

            $created = true;
        }

        SiteEvents::seed($created);
    }

}