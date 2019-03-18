<?php

use BasicApp\Site\Models\BlockModel;

if (!function_exists('block'))
{
    function block(string $uid, string $default = '', array $params = [])
    {
    	$return = BlockModel::content($uid, true, ['block_content' => $default]);

        $return = strtr($return, $params);

        return $return;
    }
}