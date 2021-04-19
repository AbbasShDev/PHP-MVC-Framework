<?php

namespace app\core;

/**
 * Class Application
 *
 * @author Abbas Alshaqaaq <abbas20alzaeem@gmail.com>
 * @package app\core
 */

class Application {

    /**
     * @var Router
     * @var Request
     */
    public static string $ROOT_DIR;
    public Router $router;
    public Response $response;
    public Request $request;
    public static Application $app;

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
     *
     */
    public function run()
    {
        echo $this->router->resolve();
    }
}