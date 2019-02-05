<?php

use BasicApp\Site\Models\Block;

if (!function_exists('block'))
{
    function block(string $uid, string $default = '', $create = true)
    {
    	return Block::content($uid, $create, ['block_content' => $default]);
    }
}