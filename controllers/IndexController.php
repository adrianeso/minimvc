<?php

namespace controllers;

require_once './controllers/ViewControllers.php';

use controllers\ViewControllers as ViewControllers;
use controllers\TestingController as Test;

class IndexController
{
    /**
     * @var ViewControllers
     */
    private $viewController;
    private $test;

    /**
     * IndexController constructor.
     */
    public function __construct()
    {
        $this->viewController = new ViewControllers();
    }

    /**
     * @param $init
     */
    public function start($init)
    {
        $this->adminViews($init);
    }

    /**
     * @param $view
     */
    public function adminViews($view)
    {
        $this->viewController->loadViews($view);
    }















}