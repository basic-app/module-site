<?php

namespace BasicApp\Site\Models;

class BlockEntity extends \BasicApp\Entity
{

    protected $modelClass = Block::class;

	protected $block_id;

	protected $block_uid = '';

	protected $block_content = '';

	protected $block_created_at;

	protected $block_updated_at;
	
}
