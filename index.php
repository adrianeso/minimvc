<?php
error_reporting(E_ALL);
ini_set("display_errors","On");

require_once 'controllers/IndexController.php';

use controllers\IndexController;

class Index
{
    private $indexController;


    public function __construct($init)
    {
        $this->indexController = new IndexController();
        $this->indexController->start($init);
    }
}

$init = isset($_GET['url']) ? $_GET['url'] : 'home';

$start = new Index($init);

