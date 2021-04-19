<?php


namespace App\Core;
/**
 * Class Controller
 *
 * @author Abbas Alshaqaaq <abbas20alzaeem@gmail.com>
 * @package App\Core
 */
class Controller {

    public function view($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }
}