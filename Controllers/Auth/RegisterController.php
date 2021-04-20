<?php

namespace App\Controllers\Auth;

use App\Core\Controller;
use App\Core\Request;

/**
 * Class RegisterController
 *
 * @author Abbas Alshaqaaq <abbas20alzaeem@gmail.com>
 * @package App\Controllers\Auth
 */

class RegisterController extends Controller {

    public function show()
    {
        $this->setLayout('auth');
        return $this->view('auth/register');
    }

    public function register()
    {

    }
}