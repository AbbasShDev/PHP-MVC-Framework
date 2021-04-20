<?php

namespace App\Core;

/**
 * Class Application
 *
 * @author Abbas Alshaqaaq <abbas20alzaeem@gmail.com>
 * @package App\Core
 */

class Application {

    /**
     * @var string
     */
    public static string $ROOT_DIR;
    /**
     * @var Router
     */
    public Router $router;
    /**
     * @var Response
     */
    public Response $response;
    /**
     * @var Request
     */
    public Request $request;
    /**
     * @var Application
     */
    public static Application $app;
    /**
     * @var Controller
     */
    public Controller  $controller;

    /**
     * Application constructor.
     * @param $rootDir
     */

    public function __construct($rootDir)
    {
        self::$app = $this;
        self::$ROOT_DIR = $rootDir;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);

    }

    /**
     * @return Controller
     */
    public function getController(): Controller
    {
        return $this->controller;
    }

    /**
     * @param Controller $controller
     */
    public function setController(Controller $controller): void
    {
        $this->controller = $controller;
    }

    /**
     *
     */
    public function run() : void
    {
        echo $this->router->resolve();
    }
}