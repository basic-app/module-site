<?php

namespace BasicApp\Site\Models;

class MenuItem extends \BasicApp\Core\Model
{

    protected $table = 'menu_item';

    protected $primaryKey = 'item_id';

    protected $returnType = MenuItemEntity::class;

    protected $allowedFields = ['item_name', 'item_url', 'item_html_class', 'item_menu_id', 'item_sort'];

	protected $validationRules = [
		'item_name' => 'trim|required|max_length[255]',
		'item_url' => 'trim|required|max_length[255]',
		'item_html_class' => 'trim|max_length[255]',
		'item_sort' => 'trim'
	];

	protected static $fieldLabels = [
		'item_name' => 'Name',
		'item_url' => 'Url',
		'item_sort' => 'Sort',
		'item_created_at' => 'Created At',
		'item_updated_at' => 'Updated At'
	];

	public function validate($data) : bool
	{
		$validationRules = $this->validationRules;

		if (!empty($data['item_sort']))
		{
			$this->validationRules['item_sort'] .= '|is_natural';
		}

		$return = parent::validate($data);

		$this->validationRules = $validationRules;

		return $return;
	}

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