<?php
/**
 * @package Basic App Site
 * @license MIT License
 * @link    http://basic-app.com
 */
namespace BasicApp\Site\Models;

abstract class BaseMenuItemModel extends \BasicApp\Core\Model
{

    protected $table = 'menu_item';

    protected $primaryKey = 'item_id';

    protected $returnType = MenuItem::class;

	protected static $fieldLabels = [
		'item_id' => 'ID',
        'item_name' => 'Name',
		'item_url' => 'Url',
		'item_sort' => 'Sort',
		'item_created_at' => 'Created At',
		'item_updated_at' => 'Updated At',
        'item_link_html_class' => 'Link HTML Class',
        'item_icon_html_class' => 'Icon HTML Class'
	];

	public function save($values)
	{
		$return = parent::save($values);

		if ($return)
		{
			if (!$values->item_id && !is_bool($return))
			{
				$values->item_id = $return;
			}

			if ($values->item_sort == null)
			{
				$values->item_sort = $values->item_id;
				
				$this->update($values->item_id, $values);
			}
		}

		return $return;
	}

}