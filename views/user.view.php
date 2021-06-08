<?php

require_once('view.php');

class UserView extends View
{

    public function __construct()
    {
        parent::__construct();
    }

    public function showLogin($error = null)
    {
        $this->getSmarty()->assign('title', "Login");
        $this->getSmarty()->assign('error', $error);
        $this->getSmarty()->display('templates/login.tpl');
    }


    public function showRegister($error = null)
    {
        $this->getSmarty()->assign('title', "Registro");
        $this->getSmarty()->assign('error', $error);
        $this->getSmarty()->display('templates/register.tpl');
    }
}
