<?php
namespace App\Controller;

use App\Core\Controller;

class RpController extends Controller{
    


    public function listeRp(){
        $this->render('rp/listerp.html.php');
    }
    
}