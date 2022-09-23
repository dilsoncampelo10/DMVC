<?php

namespace src\controllers;

use core\Controller;

class HomeController extends Controller{
    public function index(){
        $data = [
            'name' => 'Dilson'
        ];

        $this->redirect('home',$data);
    }
}