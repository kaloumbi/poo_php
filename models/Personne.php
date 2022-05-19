<?php
//classes concretes produit des Objets
//-- Methodes concretes:on connait sa definition
//Classe abstraite qui ne produit pas d'OBJETS
//--Methodes conretes: on connait sa definition
//--Methodes abstraites: on ne connait pas sa definition 
// Classe abstraite qui ne produit pas d'Objets


abstract class Personne{
    //attributs d'instances
    private int $id;
    private string $nomComplet;
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
    public function setNbrePersonne(int $nbrePersonne):void{
        self::$nbrePersonne = $nbrePersonne;
    }
}