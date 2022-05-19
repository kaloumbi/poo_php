<?php
namespace App\Controller;

use App\Core\Controller;

class ProfesseurController extends Controller{
    

    public function affecterClasse(){

    }

    public function listerProfesseur(){
        $this->render('professeur/listeprof.html.php');

    }
    
}