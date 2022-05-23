<?php
namespace App\Model;

require_once("User.php");
class RP extends User{



    public function __construct(){
        $this->role='ROLE_RP';
    }


      //Redefinition 
    /* public static function findAll(): array
    {
        $sql="select * from".self::table()." where role like ?";
        return parent::findBy($sql,[]);
    } */

    public static function findAll():array{
        $db=self::database();
        $db->connexionBD();
        $sql="select * from  ".parent::table()." where role like ?";
        $result = $db->executeSelect($sql,['ROLE_RP']);
        $db->closeConnexion();
        return $result;
    }
    
}