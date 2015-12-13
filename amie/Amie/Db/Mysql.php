<?php
/**
 * Created by PhpStorm.
 * User: gw
 * Date: 12/13/15
 * Time: 1:19 PM
 */
class Amie_Db_Mysql extends Amie_Db_Abstract
{

    private $isFetchAllAvailable = false;

    protected function connect($host, $port, $userName = null, $password = null, $dbName = null)
    {
        $handle = mysqli_connect($host, $userName, $password, $dbName, $port);

        if (mysqli_connect_error()) {
            throw new Yaf_Exception('error in connecting to'. $host.':'.$port . 'errmsg:' . mysqli_connect_error());
        } else {
            mysqli_set_charset($handle, 'utf8');
        }

        $this->isFetchAllAvailable = method_exists('mysqli_result', 'fetch_all');

        return $handle;
    }
}