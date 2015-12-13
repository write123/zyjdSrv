<?php
/**
 * Created by PhpStorm.
 * User: gw
 * Date: 12/13/15
 * Time: 12:45 PM
 */

abstract class Amie_Vo_Abstract
{
    public abstract function persist();

    public function buildResponse($model, $all = false){}
}