<?php

namespace App\Core\Routing;

/**
 * Class Route
 *
 * @author Abbas Alshaqaaq <abbas20alzaeem@gmail.com>
 * @package App\Core\Routing
 */

class Route {


    /**
     * @param $path
     * @param $callback
     */
    public static function get($path, $callback)
    {
        Router::$router->routes['get'][$path] = $callback;
    }


    /**
     * @param $path
     * @param $callback
     */
    public static function post($path, $callback)
    {
        Router::$router->routes['post'][$path] = $callback;
    }

}