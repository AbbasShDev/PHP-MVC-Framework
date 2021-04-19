<?php

namespace app\core;

/**
 * Class Router
 *
 * @author Abbas Alshaqaaq <abbas20alzaeem@gmail.com>
 * @package app\core
 */

class Router {

    /**
     * @var array
     * @var Request
     */
    protected array $routes = [];
    public Request $request;

    /**
     * Router constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;

        if(!$callback){
            die("NOT found");
        }

        echo call_user_func($callback);
    }
}