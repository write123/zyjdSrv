<?php

/**
 * Created by PhpStorm.
 * User: gw
 * Date: 12/13/15
 * Time: 12:31 PM
 */

abstract class Amie_VoList_Abstract
{
    public function setElement($id, $element){}

    public function deleteElement($id, $errNotFound = true){}

    public function updateElement($id, $element, $errNotFound = true){}

    public function addElement($element){}

    public function getElement($id, $errNotFound = true){}

    public function persist(){}

    protected abstract function persistDeleteList($model, &$responses);

    protected abstract function persistUpdateList($model, &$responses);

    protected abstract function persistInsertList($model, &$responses);

    public function getList(){}

    public function getInsertList(){}

    public function getUpdateList(){}

    public function getDeleteList(){}

    public function getListCount(){}
}