<?php

/**
 * Created by PhpStorm.
 * User: gw
 * Date: 12/12/15
 * Time: 11:20 PM
 */
class Persister
{
    private static $inst;

    private function __construct(){}

    /**
     * @return Persister
     */
    public static function get()
    {
        if(!self::$inst)
            self::$inst = new Persister();

        return self::$inst;
    }

    public function getVo($shardVal, $ormName, $cacheVal = null)
    {

    }

    public function setVo($vo)
    {

    }

    public function getVoList($shardVal, $ormName, $cacheVal = null)
    {
        
    }

    public function setVoList($voList)
    {

    }
}