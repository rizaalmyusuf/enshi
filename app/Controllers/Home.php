<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('index');
        echo view('layout/footer');
        // return view('welcome_message');
    }
}
