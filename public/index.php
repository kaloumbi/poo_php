<?php

//1-Inclure le fichier de la classe

require_once("../Models/Personne.php");
require_once("../Models/User.php");
require_once("../Models/AC.php");
require_once("../Models/Inscription.php");

//Creer l'Objet OU Instanciation
 //$pers1 = new Personne();

//appel methode de la classe nommee le constructeur __construct(); 
//3-Donner un etat à un Objet
//-> : operateur de portee d'instance(objet)
//$pers1 -> interface de la classe (tous les attributs et methodes publics de la classe)


/* $pers1->setId(1);
$pers1->setNomComplet('Kaloumbi Diedhiou');

$pers2 = new Personne();
$pers2 = setId(2);
$pers2->setNomComplet('Hill Perry');

echo $pers1->getId();
echo $pers1->getNomComplet();


//Methodes static
Personne::setNbrePersonne(12);
echo Personne::getNbrePersonne(); */

/* $pers2 = new User();
$pers2 = setId(2)
        ->setNomComplet('Hill Perry');

$pers2->affiche(); */

$ac=new AC();
echo $ac->getRole();
$ins = new Inscription();

$ins->ac();
$ins->anneeScolaire(); //recuperer anneeScolaire

