<?php 

namespace App\Mdoel;

use App\Model\User;

class AC extends User{


    //Attributs Navigationnels =>attributs issus des relations ou associations
    //OneToMany=> Inscriptions
    //1ere approche
    private array $inscriptions;


    //2eme approche
    //fonction navigationnelles => fonctions issues des associations(un AC plusieurs inscrits return tableau)

    public function inscriptions():array{
        return [];
    }
    public function __construct(){
        $this->role='ROLE_AC';
        $this->inscription=[];
    }


    //Redefinition 
    public static function findAll(): array
    {
        $db=self::database();
        $db->connexionBD();
        $sql="select * from  ".parent::table()." where role like ?";
        $result = $db->executeSelect($sql,['ROLE_AC']);
        $db->closeConnexion();
        return $result;

    }

    public  function insert():int{
        $db=parent::database();
        $db->connexionBD();
        //Requete non preparee dont la variable est injectee lors de l'ecriture de la requete
        $sql="INSERT INTO `personne`(`nom_complet`,`role`,`login`,`password`) VALUES(?,?,?,?) ";
        $result = $db->executeUpdate($sql,[$this->nomComplet,parent::$role,$this->login,$this->password]);
        $db->closeConnexion();
        return $result;
    }

}