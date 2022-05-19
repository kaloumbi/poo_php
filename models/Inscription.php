<?php

namespace App\Mdoel;
use App\Core\Model;
class Inscription extends Model{
    //Attributs Instances
    //Attributs Navigationnels =>attributs issus des relations ou associations
    //Attributs de Classe
    private int $id;

    public function __construct()
    {
        /* self::$table="inscription"; */
    }

    //ManyToOne=> AC
    public function ac():AC{

        $sql="select * from inscription i, personne p 
                where p.id=i.ac_id 
                and p.role like'ROLE_AC' 
                and i.id= ?" ;

        return parent::findBy($sql,[$this->id]);
    }


    //ManyToOne=> AnneeScolaire
     public function AnneeScolaire():AnneeScolaire{
        $sql="select a.* from annee_scolaire a,". parent::table().". i 
                where a.id=i.annee_id  
                and i.id= ?" ;
        echo $sql;
        return parent::findBy($sql,[$this->id]);
    }
    
}