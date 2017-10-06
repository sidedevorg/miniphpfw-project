<?php

namespace App\Controllers;

class HomeController extends \SideDevOrg\MiniPhpFw\Controller
{
    public function index()
    {
        return $this->view('home');
    }
}
