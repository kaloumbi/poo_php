
<?php

use App\Model\Professeur;
require("../vendor/autoload.php");
require_once("../core/fonctions.php");
require_once("../routes/route.web.php");

/* $db = new Database();
$db->connexionBD();
$resuldb =$db->executeSelect("select * from personne");
dd($resuldb); */

$pro=new Professeur();
$pro->setNomComplet('Peter Perry');
$pro->setGrade('Institeur');
/* $pro->insert(); */
  /*  dd(Professeur::findAll()); */

$chaine = str_replace("public","",$_SERVER["DOCUMENT_ROOT"]) ;
// require_once("../routes/route.web.php");





