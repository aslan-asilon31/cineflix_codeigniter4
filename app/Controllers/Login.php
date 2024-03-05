<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends Controller
{
    /**
     * Display the login page.
     *
     * @return \CodeIgniter\HTTP\Response
     */
    public function index()
    {
        $data['title'] = 'Login Page';

        return view('auth_new/login', $data);
    }
}
