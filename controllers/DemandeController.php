<?php
namespace App\Controller;

use App\Core\Controller;

class DemandeController extends Controller{
    
    public function ajouterDemande(){

    }

    public function listerDemande(){

        $this->render('demande/listedemande.html.php');
    }
}