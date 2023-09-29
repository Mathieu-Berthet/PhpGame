<?php

class dbConnector extends PDO
{
    private static $instance = null;

    public function __construct()
    {

        $dbName = "SquaresGame";
        $nameServer = "host.docker.internal";
        $userName = "root";
        $password= "helloworld";
        $port = 6603;
        $dsn = "mysql:host=$nameServer;port=$port;dbName=$dbName";
        try {
            $connection = parent::__construct($dsn, $userName, $password);
            //$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connection Successfull \n";
        } catch (PDOException $error)
        {
            echo "Connection Failed : " . $error->getMessage();
        }
    }
    public static function getInstance()
    {
        if(self::$instance == null)
        {
            self::$instance = new dbConnector();
            return self::$instance;
        }
        else
        {
            return self::$instance;
        }
    }
}