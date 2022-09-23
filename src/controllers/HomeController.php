<?php

namespace src\controllers;


use core\Controller;
use src\models\User;

class HomeController extends Controller{
    public function index(){

        $u = new User();

        $data = [
            'name' => $u->getName(1)
        ];

        $this->redirect('home',$data);
    }
}