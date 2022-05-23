<?php
namespace App\Controller;

use App\Core\Controller;

class EtudiantController extends Controller{
    

    public function listeEtudiant(){
        $this->render('etudiant/listeetudiant.html.php');
    }
    
}