<?php
namespace App\Model;
use App\Core\Model;
//Classe Finale(sterile) qui ne peuvent pas avoir de classe fille(une..)

// require_once("../core/Model.php");

abstract class Personne extends Model{
    //attributs d'instances
    protected int $id;
    protected string $nomComplet;
    protected string $role;

    //attributs de classes ou static
    private static int $nbrePersonne;


    //Constructeur Par defaut
    public function __construct(){
        
    }



    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id):void{
        $this->id = $id;
    }

    /**
     * Get the value of nomComplet
     */ 
    public function getNomComplet():string{
        return $this->nomComplet;
    }

    /**
     * Set the value of nomComplet
     *
     * @return  self
     */ 
    public function setNomComplet($nomComplet):void{
        $this->nomComplet = $nomComplet;
    }

    /**
     * Get the value of nbrePersonne
     * ::Operateur de portee de classe
     */ 
    public static function getNbrePersonne():int{
        return self::$nbrePersonne;
    }

    /**
     * Set the value of nbrePersonne
     *
     * @return  self
     */ 
    public static function setNbrePersonne(int $nbrePersonne):void{
        self::$nbrePersonne = $nbrePersonne;
    }

 

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}