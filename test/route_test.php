<?php
/**
 * Created by PhpStorm.
 * User: gw
 * Date: 12/9/15
 * Time: 10:58 PM
 */

declare(strict_types = 1);

ini_set('yaf.library', 'amie');
ini_set("yaf.action_prefer", '1');

define('APPLICATION_PATH', dirname(dirname(__FILE__)));

$application = new Yaf_Application( APPLICATION_PATH . "/conf/application.ini");

$dispatcher = $application->getDispatcher();

$route = new Yaf_Route_Simple('m', 'c', 'a');

$dispatcher->getRouter()->addRoute('simple', $route);

//?c=index&a=item&key1=abc&key2=123
var_dump($route->assemble(
    array(
        ':a' => 'item',
        ':c' => 'index',
//        ':m' => 'module'
    ),
    array(
        'key1'=>'abc',
        'key2'=>'123'
    )
));

$request = new Yaf_Request_Http('?c=index&a=item&key1=abc&key2=123');

$dispatcher->getRouter()->route($request);

//$dispatcher->dispatch($request);

var_dump($dispatcher->getRouter()->getRoutes());
var_dump($dispatcher->getRouter()->getCurrentRoute());