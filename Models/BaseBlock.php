<?php
/**
 * @package Basic App Site
 * @license MIT License
 * @link    http://basic-app.com
 */
namespace BasicApp\Site\Models;

abstract class BaseBlock extends \BasicApp\Core\Entity
{

    protected $modelClass = BlockModel::class;

	protected $block_id;

	protected $block_uid;

	protected $block_content;

	protected $block_created_at;

	protected $block_updated_at;
	
}
