<?php



namespace App\Core;
use PDO;

class DB{
    protected PDO $pdo;


    function __construct(){
        $config = require __DIR__."/../Config/config.php";
        $this->pdo = new PDO($config["dsn"],$config["user"],$config["password"]);
    }

}
