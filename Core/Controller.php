<?php


namespace App\Core;
/**
 * Class Controller
 *
 * @author Abbas Alshaqaaq <abbas20alzaeem@gmail.com>
 * @package App\Core
 */
class Controller {

    /**
     * @var string
     */
    public string $layout = "main";

    /**
     * @param $view
     * @param array $params
     * @return string|string[]
     */
    public function view($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }

    /**
     * @param string $layout
     */
    public function setLayout(string $layout): void
    {
        $this->layout = $layout;
    }
}