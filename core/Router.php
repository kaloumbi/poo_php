<?php
namespace App\Core;

use App\Controller\SecurityController;
use App\Exception\RouteNotFoundException;

class Router{
    
    private Request $request;
    public function __construct(){
        $this->request=new Request;
    }
   

    private array $routes=[];
    public function route(string $uri, array $action){
        $this->routes[$uri]=$action;
    }

    public function resolve(){
        $uri= "/".$this->request->getUri()[0];
        
        if(isset($this->routes[$uri])){
            
            $route=$this->routes[$uri];
            [$ctrClass,$action]=$route;
            if(class_exists($ctrClass) && method_exists($ctrClass,$action) ){
                // dd($ctrClass);
                $ctrl = new $ctrClass($this->request); //$ctrl=new SecurityController($this->request)=> __construct
                // $ctrl->{$action()}; //$ctrl->authentification()
                call_user_func(array($ctrl, $action) );
            }else{
                
                // dd("errorplus");
                 throw new RouteNotFoundException(); 
            }


        }else{
            

            if($this->request->getUri()[0]==""){
// die("cwkjl");
                $ctrlsec=new SecurityController($this->request);
                call_user_func(array($ctrlsec, "authentification"));

            }else{
                // dd("error");
                throw new RouteNotFoundException();
            }
            
        }    
    }
}