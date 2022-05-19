<?php
namespace App\Core;

use PDO;
//\:namespace racine
class Database{

    private PDO|null $pdo=null;

    public function connexionBD():void{
        $this->pdo=new PDO("mysql:dbname=db_universitaire;host=localhost:3308","root","");
        // die('okkk!');
    }

    public function closeConnexion():void{
        $this->pdo=null;
    }

    public function executeSelect(string $sql,array $data=[],bool $single=false):object|array|null{
        $query=$this->pdo->prepare($sql);
        $query->execute($data);
        if($single){
            //single=true
            $result= $query->fetch(\PDO::FETCH_OBJ);
            if( $query->rowCount()==0) return null;
        }else{
            //single=false
            $result= $query->fetchAll(\PDO::FETCH_OBJ);
        }
        return $result;
        
    }

    public function executeUpdate(string $sql,array $data=[]):int{
        $query=$this->pdo->prepare($sql);
        $query->execute($data);
        //insert=>retourner le dernier id genere ou insere
        return $query->rowCount();
    }
}