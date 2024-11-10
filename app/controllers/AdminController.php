<?php

namespace App\controllers;

use Core\App;
use Core\Controller;

class AdminController extends Controller
{
    public function login()
    {
        $this->view('admin/login');
    }
}