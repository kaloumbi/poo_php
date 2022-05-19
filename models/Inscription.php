<?php
class Inscription{
    //Attributs Instances
    //Attributs Navigationnels =>attributs issus des relations ou associations
    //Attributs de Classe
    

    //ManyToOne=> AC
    public function ac():AC{
        return new AC();
    }


    //ManyToOne=> AnneeScolaire
     public function AnneeScolaire():AnneeScolaire{
        return new AnneeScolaire();
    }
    
}