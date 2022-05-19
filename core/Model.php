<?php
namespace App\Core;

require_once("IModel.php");
abstract class Model implements IModel{
    

    //Dependance
    protected static function database():Database{
        return new Database();
    }
        //protected static string $table;
        public static function table():string{
            $table = get_called_class();
            $table=str_replace("App\\Model\\","",$table);
            $table = ($table=="User" or $table =="AC" or $table=="Professeur")?"personne":strtolower($table);
            return $table;
        }
        public  function insert():int{
            return 0;
        } //Quoi

        public function update():int{
            return 0;
        }

        public static function delete(int $id):int{
            $db=self::database();
            $db->connexionBD();
            //Requete non preparee dont la variable est injectee lors de l'ecriture de la requete
            $sql="delete from".self::table()." where id=$id";//pas bon
            $result = $db->executeUpdate($sql);
            $db->closeConnexion();
            return $result;
        }

        public static function findAll():array{
            $db=self::database();
            $db->connexionBD();
            $sql="select * from'".self::table()."'";
            $result = $db->executeSelect($sql);
            $db->closeConnexion();
            return $result;
        }

        public static function findById(int $id):object|null{
            $db=self::database();
            $db->connexionBD();
                        //Requete preparee dont la variable est injectee lors de l'execution de la requete
                        //?=> jocker
                        //?=>position 0, ?=>1
            $sql="select * from'".self::table()."where id=?";
            $result = $db->executeSelect($sql);
            $db->closeConnexion();
            return $result;
        }
        public static function findBy(string $sql,array $data=null,$single=false):object|null|array{
            $db=self::database();
            $db->connexionBD();
            $result = $db->executeSelect($sql,$data,$single);
            $db->closeConnexion();
            return $result;
        }
}