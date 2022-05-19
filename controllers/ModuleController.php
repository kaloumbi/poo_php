<?php
namespace App\Controller;

use App\Core\Controller;

class ModuleController extends Controller{
    

    public function ajouterModule(){

    }


    public function listeModule(){
        $this->render('module/listemodule.html.php');
    }
}