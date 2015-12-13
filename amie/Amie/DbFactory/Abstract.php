<?php
/**
 * Created by PhpStorm.
 * User: gw
 * Date: 12/13/15
 * Time: 1:12 PM
 */

abstract class Amie_DbFactory_Abstract
{

    const SHARD_TYPE_FIXED   = 'Fixed';   // "Fixed"DbFactory
    const SHARD_TYPE_DYNAMIC = 'Dynamic'; // "Dynamic"DbFactory

    const SERVER_COUNT_KEY  = '%sServerCount'; // e.g "MySql"ServerCount
    const SERVER_CONFIG_KEY = '%sServers';     // e.g "Redis"Servers

    const PAYMENT_KEY = 'Payment';

    /**
     * payment server config
     *
     * @var array
     */
    protected $paymentServer;


    public function __construct()
    {
    }

    public function getDb($shardKey = null, $type = null)
    {
        return $this->getDbInstance($shardKey, $type);
    }

    protected function getDbInstance($shardKey = null, $type = null)
    {
        return null;
    }

    public function getPaymentDb()
    {
    }



    protected function getMySqlDb($config)
    {
    }

    protected function getRedisDb($config)
    {
    }

    protected abstract function buildShardId($shardKey, $dbType);

    protected function buildServerCountKey($dbType = null)
    {
    }

    protected function buildServersConfigKey($dbType = null)
    {
    }

}