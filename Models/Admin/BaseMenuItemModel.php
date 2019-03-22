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
        'item_link_html_class', 
        'item_icon_html_class',
        'item_menu_id', 
        'item_sort'
    ];

	protected $validationRules = [
		'item_name' => 'trim|max_length[255]|required',
		'item_url' => 'trim|max_length[255]|required',
		'item_link_html_class' => 'trim|max_length[255]',
        'item_icon_html_class' => 'trim|max_length[255]',
		'item_sort' => 'trim'
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