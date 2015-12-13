<?php
/**
 * Created by PhpStorm.
 * User: gw
 * Date: 12/13/15
 * Time: 12:45 PM
 */

abstract class Amie_Model_Abstract
{
    public abstract function retrieve($shardColumnValue, $cacheColumnValue, $filters = array());
}