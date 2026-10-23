<?php
    // NAMESPACE IS ALWAYS FRIST //
    namespace App\Controllers;


    require_once __DIR__ . "/../helper.php";
    use App\Core\DB;
    use App\Models\User;

    class HomeController {

        function __construct() {
            echo "<h2>HOME</h2>";
        }

        function index() {
            $db=new DB();

            $user = new User();
        $user->create([
            "id"=>0,
            "name"=>"pepe",
            "email"=>"pepe@pepe.com",
            "password"=>"pepe"
        ]);
            echo view("home", [ "title" => "Home", "menu"=>["1","2"] ]);
        }

        function contact() {
            echo view("contact", [ "title" => "Contact" ]);
        }
        function about() {
            echo view("about", [ "title" => "about" ]);
        }
    }
