<?php

namespace BasicApp\Site\Models;

use Exception;

class PageEntity extends \CodeIgniter\Entity
{

	protected $page_id;

	protected $page_created_at;

	protected $page_updated_at;

	protected $page_url = '';

	protected $page_name = '';

	protected $page_text = '';

	protected $page_published = 1;

	public function getFormattedPublished()
	{
		return $this->page_published ? t('attribute', 'Published') : t('attribute', 'Not Published');
	}

}
