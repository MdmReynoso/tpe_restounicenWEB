<?php
require_once('libs/Smarty.class.php');


class View
{

    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->assign('url', BASE_URL);
    }

    public function getSmarty()
    {
        return $this->smarty;
    }
}
