<?php

/**
 * Created by PhpStorm.
 * User: gw
 * Date: 12/6/15
 * Time: 8:33 PM
 */
class GameLibrary
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
            self::$inst = new GameLibrary();

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