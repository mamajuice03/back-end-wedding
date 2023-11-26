<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function generate() 
    {
        // echo password_hash('Bimo1234', PASSWORD_BCRYPT);
    }
}
