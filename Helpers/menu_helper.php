<?php

use BasicApp\Site\Models\MenuModel;
use BasicApp\Site\Models\MenuItemModel;

if (!function_exists('menu_items'))
{
    function menu_items(string $menu, bool $create = false, array $params = []) : array
    {
        $return = [];

        $items = MenuModel::getMenuItems($menu, $create, $params);

        foreach($items as $item)
        {
            $row = [
                'label' => $item->item_name,
                'url' => $item->item_url
            ];

            if ($item->item_class)
            {
                $row['options']['class'] = $item->item_class;
            }

            if ($item->item_link_class)
            {
                $row['linkOptions']['class'] = $item->item_link_class;
            }

            $return[] = $row;
        }

        return $return;
    }
}