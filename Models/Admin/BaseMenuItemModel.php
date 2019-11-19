<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
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
		'item_name' => 'not_special_chars|max_length[255]|required',
		'item_url' => 'not_special_chars|max_length[255]|required',
		'item_link_class' => 'not_special_chars|max_length[255]',
        'item_icon' => 'not_special_chars|max_length[255]',
        'item_class' => 'not_special_chars|max_length[255]',
		'item_sort' => 'not_special_chars|is_natural|permit_empty',
        'item_enabled' => 'not_special_chars|required|is_natural',
        'item_uid' => 'not_special_chars|max_length[255]'
	];

    public function afterValidate(array $params) : array
    {
        $data = $params['data'];

        if ($data['item_uid'])
        {
            $class = static::class;

            $query = new $class;

            $query->where([
                'item_menu_id' => $data['item_menu_id'],
                'item_uid' => $data['item_uid']
            ]);

            if ($data['item_id'])
            {
                $query->where('item_id !=', $data['item_id']);
            }

            if ($query->first())
            {
                $error = strtr(
                    lang('Validation.is_unique'), 
                    [
                        '{field}' => $this->label('item_uid')
                    ]
                );

                $this->validation->setError('item_uid', $error);

                $params['result'] = false;
            }
        }

        return $params;
    }

}