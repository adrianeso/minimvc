<?php
namespace controllers;

class AutoloadController
{
    private $pathControllers = './controllers/';

    private $pathModels = './models/';

    public function __construct()
    {
        spl_autoload_register(function($myClass){

            $models = $this->pathModels.$myClass.'.php';

            $controllers = $this->pathControllers.$myClass.'.php';

            if (file_exists($models)) require_once ( $models );

            if (file_exists($controllers)) require_once ( $controllers );
        });
    }
}