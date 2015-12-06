<?php

/**
 * Created by PhpStorm.
 * User: gw
 * Date: 12/6/15
 * Time: 10:54 PM
 */
class ResponseManger
{
    private $headers = array();
    private $contentType = 'application/json';
    private $body = array();
    private $protocol = 'HTTP/1.1';
    private $persistBodyKey = 'update';
    private $charset = 'UTF-8';
}