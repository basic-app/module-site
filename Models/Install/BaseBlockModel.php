<?php
/**
 * @package Basic App Site
 * @license MIT License
 * @link    http://basic-app.com
 */
namespace BasicApp\Site\Models\Install;

abstract class BaseBlockModel
{

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