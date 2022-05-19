<?php

namespace App\Model;
use App\Core;
require_once("Personne.php");
class Professeur extends Personne{

    private string $grade;

    public function __construct(){
        $this->role='ROLE_PROFESSEUR';
    }

    //Fonctions navigationneles(traduisent les relations)
    //ManyToMany avec Classe(pour un prof, on aura un tableau contenant ou retournant l'ensemble de ses classes);

    public function classes():array{
        return [];
    }

     public static function findAll():array{
        $db=self::database();
        $db->connexionBD();
        $sql="select * from  ".parent::table()." where role like ?";
        $result = $db->executeSelect($sql,['ROLE_PROFESSEUR']);
        $db->closeConnexion();
        return $result;
    }

     public  function insert():int{
        $db=parent::database();
        $db->connexionBD();
        //Requete non preparee dont la variable est injectee lors de l'ecriture de la requete
        $sql="INSERT INTO `personne`(`nom_complet`,`role`,`grade`) VALUES(?,?,?) ";
        $result = $db->executeUpdate($sql,[$this->nomComplet,$this->role,$this->grade]);
        $db->closeConnexion();
        return $result;
    }


    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }
}