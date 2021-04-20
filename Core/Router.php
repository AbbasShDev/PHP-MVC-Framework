<?php

namespace App\Core;

/**
 * Class Router
 *
 * @author Abbas Alshaqaaq <abbas20alzaeem@gmail.com>
 * @package App\Core
 */

class Router {
    /**
     *
     * @var array
     * @var Request
     * @var Response
     */
    protected array $routes = [];
    public Request $request;
    public Response $response;

    /**
     * Router constructor.
     * @param Request $request
     * @param Response $response
     */
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }


    /**
     * @param $path
     * @param $callback
     */
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    /**
     * @param $path
     * @param $callback
     */
    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    /**
     * @return mixed|string|void
     */
    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->method();
        $callback = $this->routes[$method][$path] ?? false;

        if(!$callback){
            $this->response->setStatusCode(404);
            return $this->renderView("errors/404");
        }

        if (is_string($callback)){
            return $this->renderView($callback);
        }

        if (is_array($callback)){
            Application::$app->controller = new $callback[0]();
            $callback[0] = Application::$app->controller;
        }

        return call_user_func($callback, $this->request);
    }

    /**
     * @param $view
     * @param array $params
     * @return string|string[]
     */
    public function renderView($view, $params = [])
    {
        $layoutContent = $this->getLayoutContent();
        $viewContent = $this->getSingleViewContent($view, $params);
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    protected function getLayoutContent()
    {
        $layout = Application::$app->controller->layout;
        ob_start();
        include_once Application::$ROOT_DIR."/views/layouts/$layout.php";
        return ob_get_clean();
    }

    private function getSingleViewContent($view, $params)
    {
        foreach ($params as $key =>$val) {
            $$key = $val;
        }

        ob_start();
        include_once Application::$ROOT_DIR."/views/$view.php";
        return ob_get_clean();
    }
}