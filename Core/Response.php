<?php


namespace App\Core;


/**
 * Class Response
 *
 * @author Abbas Alshaqaaq <abbas20alzaeem@gmail.com>
 * @package App\Core
 */
class Response {

    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }
}