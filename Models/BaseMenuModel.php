<?php
/**
 * @package Basic App Site
 * @license MIT License
 * @link    http://basic-app.com
 */
namespace BasicApp\Site\Models;

abstract class BaseMenuModel extends \BasicApp\Core\Model
{

    protected $table = 'menu';

    protected $primaryKey = 'menu_id';

    protected $returnType = Menu::class;

	protected $labels = [
		'menu_name' => 'Name',
		'menu_uid' => 'UID',
		'menu_id' => 'ID',
		'menu_created_at' => 'Created At',
		'menu_updated_at' => 'Updated At',
        'menu_default_item_icon' => 'Default Item Icon',
        'menu_default_item_class' => 'Default Item Container Class',
        'menu_default_item_link_class' => 'Default Item Link Class'
	];

    protected $translations = 'menu';

    public static function getMenu(string $uid, bool $create = false, array $params = [])
    {
        return static::getEntity(['menu_uid' => $uid], $create, $params);
    }

    public static function getMenuItems(string $uid, bool $create = false, array $params = [])
    {
        $menu = static::getMenu($uid, $create, $params);

        if (!$menu)
        {
            return [];
        }

        $query = new MenuItemModel;

        $items = $query
            ->where([
                'item_menu_id' => $menu->menu_id,
                'item_enabled' => 1
            ])
            ->orderBy('item_sort ASC')
            ->findAll();

        return $items;
    }

}