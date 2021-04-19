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

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function getBody()
    {
        $body = [];

        if ($this->getMethod() == 'get'){

            foreach ($_GET as $key => $value){
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }

        }

        if ($this->getMethod() == 'post'){

            foreach ($_POST as $key => $value){
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }

        }

        return $body;
    }
}