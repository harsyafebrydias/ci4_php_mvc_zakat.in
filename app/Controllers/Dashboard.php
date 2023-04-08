<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index123()
    {
        $session = session();
        echo "Welcome back, ".$session->get('user_name');
    }
}
