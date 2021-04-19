<?php


namespace app\core;


/**
 * Class Response
 *
 * @author Abbas Alshaqaaq <abbas20alzaeem@gmail.com>
 * @package app\core
 */
class Response {

    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }
}