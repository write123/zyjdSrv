<?php

/**
 * Created by PhpStorm.
 * User: gw
 * Date: 12/6/15
 * Time: 8:33 PM
 */
class d1_GameLibrary
{
    private static $inst;
    private $name;

    private function __construct(){}

    /**
     * @return GameLibrary
     */
    public static function get()
    {
        if(!self::$inst)
            self::$inst = new d1_GameLibrary();

        return self::$inst;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}