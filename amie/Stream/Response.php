<?php

/**
 * Created by PhpStorm.
 * User: gw
 * Date: 12/8/15
 * Time: 12:25 AM
 */

class Stream_Response
{
    /**
     * @var array
     */
    protected $_body;

    /**
     * @param array $content
     * @return null
     */
    public function setBody(array $content)
    {
        $this->_body = $content;
    }

    /**
     * @return array
     */
    public function getBody()
    {
        return $this->_body;
    }
}