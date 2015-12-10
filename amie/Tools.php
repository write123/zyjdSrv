<?php

/**
 * Created by PhpStorm.
 * User: gw
 * Date: 12/10/15
 * Time: 3:54 PM
 */
class Tools
{
    private static $inst;

    private function __construct(){}

    /**
     * @return Tools
     */
    public static function get()
    {
        if(!self::$inst)
            self::$inst = new Tools();

        return self::$inst;
    }

    /**
     * @param mixed $input
     * @return string
     */
    public static function escape($input) : string
    {
        if(is_array($input))
            foreach($input as $k => $v)
                $input[$k] = self::escape($v);
        else
            $input = trim(strip_tags($input));

        return $input;
    }

    /**
     * @param string $name
     * @param string|null $default
     * @return string
     */
    public static function getReqParam(string $name, string $default = null)
    {
        return isset($_REQUEST[$name]) ? self::escape($_REQUEST[$name]) : $default;
    }
}