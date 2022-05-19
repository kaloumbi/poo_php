<?php
class Professeur extends Personne{




    public function __construct(){
        $this->role='ROLE_PROFESSEUR';
    }




    //Fonctions navigationneles(traduisent les relations)
    //ManyToMany avec Classe(pour un prof, on aura un tableau contenant ou retournant l'ensemble de ses classes);

    public function classes():array{
        return [];
    }



    //insert
    //update
    //delete

    //selectAll() //select * from table;
    //selectById() //select * from table where id=1;
    //selectAll()



}