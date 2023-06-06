<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $helpers = ['html', 'text', 'form', 'auth'];
    
    public function index()
    {
        return view('home');
    }
}
