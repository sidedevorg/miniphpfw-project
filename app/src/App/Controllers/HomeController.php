<?php

namespace App\Controllers;

class HomeController extends \SideDevOrg\MiniPhpFw\Controller
{
    /**
     * GET /
     */
    public function index()
    {
        return $this->view('home');
    }
}
