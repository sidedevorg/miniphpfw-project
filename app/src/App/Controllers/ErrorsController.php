<?php

namespace App\Controllers;

class ErrorsController extends \SideDevOrg\MiniPhpFw\Controller
{
    /**
     * Override MiniPhpFw not found method
     *
     * @return string
     */
    public function not_found() : string
    {
        return $this->view('errors/404');
    }
}
