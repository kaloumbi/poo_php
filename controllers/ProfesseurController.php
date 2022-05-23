<?php
namespace App\Controller;

use App\Core\Controller;
use App\Model\Professeur;

class ProfesseurController extends Controller{
    

    public function affecterClasse(){

    }

    public function listerProfesseur(){
        $this->render('professeur/listeprof.html.php');

    }

    public function ajouterProf(){
        if($this->request->isGET()){
            $this->render('professeur/ajoutProf.html.php');

        }else{
            extract($_POST);
            $prof=new Professeur;
            $prof->setNomComplet($nomComplet);
            $prof->setGrade($grade);
            $prof->insert();
            $this->redirectToRoute('prof');
        }

    }
    
}