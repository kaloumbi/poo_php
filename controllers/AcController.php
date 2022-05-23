<?php
namespace App\Controller;

use App\Core\Controller;

class AcController extends Controller{
    

    public function listeAc(){
        $this->render('ac/listeac.html.php');

    }
    
}