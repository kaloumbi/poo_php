<?php 

namespace App\Model;

class Etudiant extends User{

    
    private string $matricule;
    private string $sexe;
    private string $adresse;

    public function __construct(){
        $this->role='ROLE_ETUDIANT';
    }

    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get the value of sexe
     */ 
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @return  self
     */ 
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }


     //Redefinition 
     public static function findAll():array{
        $db=self::database();
        $db->connexionBD();
        $sql="select * from  ".parent::table()." where role like ?";
        $result = $db->executeSelect($sql,['ROLE_ETUDIANT']);
        $db->closeConnexion();
        return $result;
    }

    
}