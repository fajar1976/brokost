<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function login()
    {
        return view('Auth/VLogin');
    }
    public function register()
    {
        return view('Auth/Vregister');
    }
    public function user()
    {
        return view('user/index');
    }
}
