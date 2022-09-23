<?php

namespace core;

class Controller {
    public function redirect($view){
        require_once '../src/views/'.$view.'.php';
     
    }
}