<?php

namespace BasicApp\Site\Database\Migrations;

use CodeIgniter\Database\Migration;
use BasicApp\Site\Models\PageModel;

class Migration_pages_init extends Migration
{

	public function up()
	{
        PageModel::factory()->getPage('index', true, [
            'page_name' => 'Index page',
            'page_text' => '<p>Index page text.</p>',
            'page_published' => 1
        ]);
	}

	public function down()
	{
		// nothing to do
	}
    
}