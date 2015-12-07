<?php
/**
 * Created by PhpStorm.
 * User: gw
 * Date: 12/7/15
 * Time: 9:55 PM
 */

class BaseController extends Yaf_Controller_Abstract
{
    protected $renderJson = true;

    public function setRender(bool $json)
    {
        $this->renderJson = $json;

        return $this;
    }

    /**
     * @param array $result
     * @return bool
     */
    public function output(array $result)
    {
        if( $this->renderJson ){
            header('Content-Type:application/json; charset=UTF-8');
            echo json_encode($result, JSON_NUMERIC_CHECK | JSON_FORCE_OBJECT);

            return false;
        }
        else{
            /** @var Yaf\View\Simple $view */
            $view = $this->getView();
            $view->assign($result);

            return true;
        }
    }
}