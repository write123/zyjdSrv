<?php

/**
 * Created by PhpStorm.
 * User: gw
 * Date: 12/11/15
 * Time: 12:28 AM
 */
class Amie_Action_Base extends Yaf_Action_Abstract
{
    public function execute()
    {
        $response = call_user_func_array([$this, 'init'], $this->getRequest()->getParams());
        Response::get()->setBody($response);
    }
}