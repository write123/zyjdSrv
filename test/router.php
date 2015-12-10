<?php
/**
 * Created by PhpStorm.
 * User: gw
 * Date: 12/9/15
 * Time: 10:27 AM
 */

$request = new Yaf_Request_Simple(
    'index', 'item', 'add' , 'Hello', array("a"=>12312)
);

echo $request->getBaseUri();

print_r($request);