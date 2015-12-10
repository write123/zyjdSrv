<?php

/**
 * Created by PhpStorm.
 * User: gw
 * Date: 12/8/15
 * Time: 11:13 PM
 */

class itemAction extends baseAction
{
    public function init(string $name, int $age)
    {
        $ret['name'] = $name;
        $ret['age'] = $age;

        return $ret;
    }
}