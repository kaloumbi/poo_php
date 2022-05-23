<?php
//1-Inclure le fichier de la classe

use App\Core\Router;
use App\Controller\AcController;
use App\Controller\RpController;
use App\Controller\ClasseController;
use App\Controller\ModuleController;
use App\Controller\DemandeController;
use App\Controller\EtudiantController;
use App\Controller\PersonneController;
use App\Controller\SecurityController;
use App\Controller\ProfesseurController;
use App\Exception\RouteNotFoundException;

//Definir les routes =>Ajout des routes dans le tableau
$router=new Router();
$router->route('/login',[SecurityController::class,"authentification"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);
$router->route('/classes',[ClasseController::class,"ListerClasse"]);
$router->route('/add-classe',[SecurityController::class,"creerClasse"]);
$router->route('/personnes',[PersonneController::class,"lister"]);
$router->route('/prof',[ProfesseurController::class,"listerProfesseur"]);
$router->route('/demande',[DemandeController::class,"listerDemande"]);
$router->route('/module',[ModuleController::class,"listeModule"]);
$router->route('/rp',[RpController::class,"listeRp"]);
$router->route('/ac',[AcController::class,"listeAc"]);
$router->route('/etudiant',[EtudiantController::class,"listeEtudiant"]);

//ajouter des user
$router->route('/ajout-prof',[ProfesseurController::class,"ajouterProf"]);


// dd($_SERVER['REQUEST_URL']);



//Resolution des routes=> verifier si la route existe dans le tableau
try{
    //Essaie Resoudre la route
    $router->resolve();
}catch(RouteNotFoundException $ex) {
    //Capture l'exception et affiche le
    echo $ex->message;
}