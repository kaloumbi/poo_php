<?php
namespace App\Mdoel;
use App\Core\Model;
require_once("../core/Model.php");
class AnneeScolaire extends Model{
    //fonctions navigayionnelles


    //OneToMany
    public function inscriptions():array{
        return [];
    }


    
}