<?php
namespace App\Controller;

use App\Core\Controller;
use App\Model\User;

use App\Core\Request;

class SecurityController extends Controller{


    public function authentification(){
        
        //Affichage du Formulaire de connexion=> GET
        if($this->request->isGet()){
            $this->render('security/login.html.php');
        }

        if($this->request->isPost()){
           
            extract($_POST);
            if(User::findUserByLoginAndPassword( $login,$password)!=null){
                // dd(User::findUserByLoginAndPassword( $login,$password));      
                //$this->render('professeur/listeprof.html.php');
                $this->redirectToRoute('prof');
            }else{
                //var_dump($_SERVER['REQUEST_METHOD']);
                //die();
                $this->render('security/login.html.php');
            }

           //dd($_POST['password']);
            //$this->render('security/login.html.php');
        }
        
        //2-Traitement apres soumission => POST
    }

    public function deconnexion(){
        $this->redirectToRoute("login");
    }
}
