<?php

/**
 * Created by PhpStorm.
 * User: gw
 * Date: 12/12/15
 * Time: 9:40 PM
 */
class Response
{
    private $body = array();
    private $contentType = 'application/json';

    private static $inst;

    private function __construct(){}

    /**
     * @return Response
     */
    public static function get()
    {
        if(!self::$inst)
            self::$inst = new Response();

        return self::$inst;
    }

    /**
     * array|string $body
     *
     * @param $body
     * @return Response
     */
    public function setBody($body) : Response
    {
        $this->body = $body;

        return $this;
    }

    public function toHtml()
    {
        $this->contentType = 'text/html';
    }

    public function render()
    {
        if($this->contentType == 'application/json') {
            $this->body = array(
                'code' => 200,
                'data' => $this->body,
                'time' => time()
            );

            $this->body = json_encode($this->body, JSON_FORCE_OBJECT | JSON_NUMERIC_CHECK);

            header('HTTP/1.1 200 OK');
            header("Content-Length: " . strlen($this->body));
            header("Content-Type: application/json; charset=UTF-8");

        }

        echo $this->body;
    }
}