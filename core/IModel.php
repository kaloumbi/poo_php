<?php
namespace App\Core;

interface IModel{
    //Abstraites
    // instances
    public function insert():int; //Quoi
    public function update():int;

    //static
    public static function delete(int $id):int;
    public static function findAll():array;
    public static function findById(int $id):object|null;
    public static function findBy(string $sql,array $data=null,$single=false):object|null|array;


    //select * from personne where nom_complet like "Diop";
    //select * from personne where login= douve and password =douve;

}

//Methodes Static => Classe
/* 
Classe::methodes
Classe::delete(1) //Delete from classe where id=1
Classe::findAll() //select * from classe
Classe::insert(["Classe1","niveau","filiere"]) 
    -> insert into classe (libelle,niveau,filiere) values(classe,niveau,filiere)
*/

//Methodes Instances = Methobes Objet
/* 
//etat de Objet => valeur de ses attributs
$obj=new Classe()
$obj->setId(1)
$obj->setLibelle("classe 1)
$obj->update()

$obj->methode() :: update from classe set libelle='classe 1' where id=1


$obj=new Classe()
$obj-> setId(1)
$obj->delete() //delete from classe where id=1
*/