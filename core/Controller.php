<?php

namespace core;

class Controller {
    public function redirect($view,$data=[]){
        extract($data);
        require_once '../src/views/'.$view.'.php';
     
    }
}