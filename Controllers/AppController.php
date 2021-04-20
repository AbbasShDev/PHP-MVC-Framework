<?php


namespace App\Controllers;

use App\Core\Application;
use App\Core\Controller;
use App\Core\Request;

/**
 * Class AppController
 *
 * @author Abbas Alshaqaaq <abbas20alzaeem@gmail.com>
 * @package App\Controllers
 */

class AppController extends Controller {

    public function home()
    {
        $name = "abbas";
        $age = 21;

//        $hobbies = [
//            'swimming',
//            'football',
//            'Gamming',
//            'programming'
//        ];

//        return Application::$app->router->renderView('home',[
//            'name' => $name,
//            'age' => $age,
//        ]);
        return $this->view('home', compact('name', 'age'));
    }

    public function contactCreate()
    {
        return $this->view('contact');
    }

    public function contactStore(Request $request)
    {
        var_dump($request->getBody());

    }


}