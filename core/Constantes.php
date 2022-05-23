<?php
namespace App\Core;

class Constantes{

    public const WEB_ROOT= "http://localhost:8002/";
    public static function ROOT(){
        //dd($_SERVER);
        return str_replace("public","",$_SERVER["DOCUMENT_ROOT"]);
    }
    
}