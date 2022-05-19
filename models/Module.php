<?php
namespace App\Model;

use App\Core\Model;

require_once("../core/Model.php");

class Module extends Model{

    public function __construct()
    {
        
    }

    //fonctions navigationnelles
    //ManyToMany avec Professeur(deux tableaux des deux cotes)
    public function professeurs():array|null{
        $sql="select...";
        return parent::findById($sql,[$this->id]);
    }

    
    public static function findAll():array{
        $db=self::database();
        $db->connexionBD();
        $sql="select * from  module";
        $result = $db->executeSelect($sql);
        $db->closeConnexion();
        return $result;
    }

    
}