<?php
namespace App\Controller;

use App\Core\Controller;
use App\Core\Request;

class ClasseController extends Controller{

    public function listerClasse(){
        $this->render('classe/listeclasse.html.php');
    }

    public function creerClasse(){
        
    }
}