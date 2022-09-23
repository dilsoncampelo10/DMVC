<?php

namespace core;

class Router {
    

    public function run(){
       
        $url = isset($_GET['url']) ? filter_input(INPUT_GET, 'url',FILTER_SANITIZE_SPECIAL_CHARS):'/';

        $currentController = 'HomeController';
        $currentAction = 'index';
        $params = [];

        if($url != '/'){
            $url = explode('/',$url);
            $currentController = ucfirst($url[0]).'Controller';
            array_shift($url);
            if($url[0]!=''){
                $currentAction = $url[0];
                array_shift($url);
                if(count($url)>0){
                    $params[] = $url;
                }
            }
        }
         
        if(!file_exists('../src/controllers/'.$currentController.'.php') || !method_exists('src\\controllers\\'.$currentController,$currentAction)){
            $currentController = 'ErrorController';
            $currentAction = 'index';

        }

        $newController = 'src\\controllers\\'.$currentController;

        $c = new $newController();
    
        call_user_func_array([$c,$currentAction],$params);
    }
}