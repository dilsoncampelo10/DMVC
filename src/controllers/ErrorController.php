<?php

namespace src\controllers;

use core\Controller;

class ErrorController extends Controller{
    public function index(){
        $this->redirect('404');
    }
}