<?php

namespace controllers;

class ViewControllers
{
    /**
     * @var string
     */
    private $pathViews;

    /**
     * ViewControllers constructor.
     */
    public function __construct()
    {
        $this->pathViews = './views/';
    }

    /**
     * @param $view
     */
    public function loadViews($view)
    {
        if (file_exists($this->pathViews.$view.'.php')){
            require_once $this->pathViews.'templates/header.php';
            require_once $this->pathViews.$view.'.php';
            require_once $this->pathViews.'templates/footer.php';
        }else{
            require_once $this->pathViews.'404.php';
        }

    }


}