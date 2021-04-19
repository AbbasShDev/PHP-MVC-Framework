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
    public Router $router;
    public Request $request;

    /**
     * Application constructor.
     */

    public function __construct()
    {

        $this->request = new Request();
        $this->router = new Router($this->request);

    }

    public function run()
    {
        $this->router->resolve();
    }
}