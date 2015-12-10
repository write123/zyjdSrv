<?php

/**
 * Created by PhpStorm.
 * User: gw
 * Date: 12/8/15
 * Time: 11:13 PM
 */

class itemAction extends Yaf_Action_Abstract
{
    public function execute()
    {

        echo 11111111;
        //Response_Json::get()->addBody(array('item'=>'name'));
        var_dump($this->getRequest()->getParams());
        exit;

        return false;
    }
}