<?php


class ConnectionModel
{

    private $user = 'root';
    private $password = 'Sept_0977';

    public function __construct()
    {
        try {
            $connection = new PDO('mysql:host=localhost;dbname=prueba', $this->user, $this->password);
        }catch(PDOException $PDOException){
            $PDOException->getMessage();
        }
    }




}