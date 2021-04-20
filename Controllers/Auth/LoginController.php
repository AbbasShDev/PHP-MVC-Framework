<?php

namespace App\Controllers\Auth;

use App\Core\Controller;
use App\Core\Request;

/**
 * Class LoginController
 *
 * @author Abbas Alshaqaaq <abbas20alzaeem@gmail.com>
 * @package App\Controllers\Auth
 */

class LoginController extends Controller {

    public function show()
    {
        $this->setLayout('auth');
        return $this->view('auth/login');
    }

    public function login()
    {

    }
}