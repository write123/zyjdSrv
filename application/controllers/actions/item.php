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
        $ret['item']['configId'] = 123;
        $ret['item']['name']  = 'sancha';
        $ret['request'] = $this->getRequest()->getParams();

        Response_Json::get()->addBody($ret);

        return false;
    }
}