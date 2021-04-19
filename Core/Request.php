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
}