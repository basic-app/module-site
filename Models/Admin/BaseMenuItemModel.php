<?php
/**
 * @package Basic App Site
 * @license MIT License
 * @link    http://basic-app.com
 */
namespace BasicApp\Site\Models\Admin;

abstract class BaseMenuItemModel extends \BasicApp\Site\Models\MenuItemModel
{

    protected $returnType = MenuItem::class;

    protected $allowedFields = [
        'item_name', 
        'item_url', 
        'item_link_class',
        'item_class', 
        'item_icon',
        'item_menu_id', 
        'item_sort',
        'item_uid',
        'item_enabled'
    ];

	protected $validationRules = [
		'item_name' => 'trim|max_length[255]|required',
		'item_url' => 'trim|max_length[255]|required',
		'item_link_class' => 'trim|max_length[255]',
        'item_icon' => 'trim|max_length[255]',
        'item_class' => 'trim|max_length[255]',
		'item_sort' => 'trim',
        'item_enabled' => 'trim|required|is_natural',
        'item_uid' => 'trim|max_length[255]'
	];

	public function validate($data) : bool
	{
		$validationRules = $this->validationRules;

        if (is_array($data))
        {
            if (!empty($data['item_sort']))
            {
                $this->validationRules['item_sort'] .= '|is_natural';
            }        
        }
        else
        {
            if ($data->item_sort)
            {
                $this->validationRules['item_sort'] .= '|is_natural';
            }
        }

		$return = parent::validate($data);

		$this->validationRules = $validationRules;

		return $return;
	}

}