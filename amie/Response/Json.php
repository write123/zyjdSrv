<?php

/**
 * Created by PhpStorm.
 * User: gw
 * Date: 12/8/15
 * Time: 9:59 AM
 */
class Response_Json
{
    private $body = array();

    private static $inst;

    private function __construct(){}

    /**
     * @return Response_Json
     */
    public static function get()
    {
        if(!self::$inst)
            self::$inst = new Response_Json();

        return self::$inst;
    }

    public function addBody(array $info) : bool
    {
        $this->body += $info;

        return true;
    }

    public function send() : bool
    {
        $result['code'] = 0;
        $result['data'] = $this->body;
        $result['time'] = time();

        $body = json_encode($result, JSON_FORCE_OBJECT | JSON_NUMERIC_CHECK);

        header('HTTP/1.1 200 OK');
        header("Content-Length: " . strlen($body));
        header("Content-Type: application/json; charset=UTF-8");

        echo $body;

        return true;
    }
}