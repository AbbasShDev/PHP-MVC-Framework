<?php


namespace App\Core;

/**
 * Class Request
 *
 * @author Abbas Alshaqaaq <abbas20alzaeem@gmail.com>
 * @package App\Core
 */

class Request {

    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $startPathQuery = strpos('?', $path);

        if (!$startPathQuery){
           return $path;
        }

        return substr($path, 0, $startPathQuery);

    }

    public function method()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function isGet()
    {
        return $this->method() == 'get';
    }

    public function isPost()
    {
        return $this->method() == 'post';
    }

    public function getBody()
    {
        $body = [];

        if ($this->method() == 'get'){

            foreach ($_GET as $key => $value){
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }

        }

        if ($this->method() == 'post'){

            foreach ($_POST as $key => $value){
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }

        }

        return $body;
    }
}