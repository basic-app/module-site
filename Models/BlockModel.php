<?php

namespace BasicApp\Site\Models;

class BlockModel extends \BasicApp\Core\Model
{

	protected $table = 'blocks';

	protected $primaryKey = 'block_id';

	protected $allowedFields = [
		'block_uid',
		'block_content'
	];

	protected $validationRules = [
		'block_uid' => 'trim|required|max_length[255]|required',
		'block_content' => 'trim|max_length[65535]'
	];

	protected static $fieldLabels = [
		'block_id' => 'ID',
		'block_uid' => 'UID',
		'block_content' => 'Content',
		'block_created_at' => 'Created',
		'block_updated_at' => 'Updated'
	];

	protected $returnType = BlockEntity::class;

	protected $useTimestamps = true;

	protected $createdField = 'block_created_at';

	protected $updatedField = 'block_updated_at';

	protected $uidField = 'block_uid';

	public static function content(string $uid, bool $create = true, array $params = []) : string
	{
		$model = static::get($uid, $create, $params);

		if ($model)
		{
			return (string) $model->block_content;
		}

		if (array_key_exists('block_content', $params))
		{
			return $params['block_content'];
		}

		return '';
	}

	public static function findAllByPrefix($prefix)
	{
		$class = static::class;

		return (new $class)->like('block_uid', $prefix . '.', 'left')->findAll();
	}

	public static function install()
	{
		static $installed = false;

		if ($installed)
		{
			return;
		}

		$installed = true;
	}

}
