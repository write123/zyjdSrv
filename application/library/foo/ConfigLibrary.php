<?php

/**
 * Created by PhpStorm.
 * User: gw
 * Date: 12/6/15
 * Time: 9:33 PM
 */
class ConfigLibrary
{
    private static $inst;

    private function __construct(){}

    /**
     * @return ConfigLibrary
     */
    public static function get()
    {
        if(!self::$inst)
            self::$inst = new ConfigLibrary();

        return self::$inst;
    }

    public function load()
    {

    }
}