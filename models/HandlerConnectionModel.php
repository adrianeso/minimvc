<?php
namespace models;

use ConnectionModel;

include 'models/ConnectionModel.php';

class HandlerConnectionModel extends ConnectionModel
{
    private $connection;
    protected $query;
    protected $rows;

    public function __construct()
    {
        $this->connection = parent::__construct();
    }

    public function saludar()
    {
        echo "Hola soy el saludo del modelo handler";
    }

    public function get()
    {
        $this->connection;
        $this->query->execute();
        $this->disconnect();
    }

    public function disconnect()
    {
        $this->connection = null;
    }






}