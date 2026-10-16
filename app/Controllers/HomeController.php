<?php
    // NAMESPACE IS ALWAYS FRIST //
    namespace App\Controllers;


    require_once __DIR__ . "/../helper.php";

    class HomeController {

        function __construct() {
            echo "<h2>HOME</h2>";
        }

        function index() {
            echo view("home", [ "title" => "Home", "menu"=>["1","2"] ]);
        }

        function contact() {
            echo view("contact", [ "title" => "Contact" ]);
        }
        function about() {
            echo view("about", [ "title" => "about" ]);
        }
    }
