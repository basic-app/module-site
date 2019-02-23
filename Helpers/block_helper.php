<?php

use BasicApp\Site\Models\BlockModel;

if (!function_exists('block'))
{
    function block(string $uid, string $default = '', $create = true)
    {
    	return BlockModel::content($uid, $create, ['block_content' => $default]);
    }
}