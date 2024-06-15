<?php

namespace App\Controllers;

class HomeController {

    public function index(){
        $user = new \App\Models\User('LUIS','RAMIREZ');
        require __DIR__. '/../Views/home.php';
    }

} 