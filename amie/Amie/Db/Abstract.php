<?php
/**
 * Created by PhpStorm.
 * User: gw
 * Date: 12/13/15
 * Time: 12:46 PM
 */

abstract class Amie_Db_Abstract
{
    protected abstract function connect($host, $port, $userName = null, $password = null, $dbName = null);
}