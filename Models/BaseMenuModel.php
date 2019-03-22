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

}