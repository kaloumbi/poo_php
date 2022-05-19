<?php
namespace App\Core;
class Request{
    
    
    public function getUri(){
        $url =explode("/",$_SERVER['REQUEST_URI']) ;
        unset($url[0]);
        return array_values($url);
    }


    public function isGET():bool{
        return $_SERVER['REQUEST_URL']=="GET";
    }

    public function isPOST():bool{
        return $_SERVER['REQUEST_URL']=="POST";
    }
}