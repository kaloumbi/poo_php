<?php 
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
}