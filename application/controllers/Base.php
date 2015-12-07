<?php

/**
 * Created by PhpStorm.
 * User: gw
 * Date: 12/7/15
 * Time: 2:35 PM
 */
class BaseController extends Yaf_Controller_Abstract
{
    protected $renderJson = true;

    public function setRender(bool $json)
    {
        $this->renderJson = $json;

        return $this;
    }

    public function output(array $result)
    {
        if( $this->renderJson ){
            header('Content-Type:application/json; charset=UTF-8');
            die(json_encode($result, JSON_NUMERIC_CHECK | JSON_FORCE_OBJECT));
        }
        else{
            /** @var Yaf_View_Simple $view */
            $view = $this->getView();
            $view->assign($result);
        }
    }
}