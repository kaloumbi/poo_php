
<?php
    /* $hidden = "hidden";
    if($hidden == roll){
        $hidden;
    } */

    $hidden = 'hidden';
    if($_SERVER['REQUEST_URI']=='prof'){
        $hidden="";
    }
?>




<nav class="navbar navbar-expand-lg navbar-light bg-success display-5 p-10">
  <a class="navbar-brand " href="#">ACCUEIL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


    
    <div class="dropdown p-5">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                    Etudiant
                </button>
        <div class="dropdown-menu" aria-labelledby="triggerId">
            <a class="dropdown-item" href="#">Liste Etudiant</a>
            <a class="dropdown-item" href="#">Ajouter Etudiant</a>

        </div>
    </div>

    <div class="dropdown p-5">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                    Professeur
                </button>
        <div class="dropdown-menu" aria-labelledby="triggerId">
            <a class="dropdown-item" href="<?= $constantes::WEB_ROOT.'prof'?>">Liste Professeur</a>
            <a class="dropdown-item" href="ajout-prof" >Ajouter Professeur</a>

        </div>
    </div>

    <div class="dropdown p-5">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                    Classe
                </button>
        <div class="dropdown-menu" aria-labelledby="triggerId">
            <a class="dropdown-item" href="<?= $constantes::WEB_ROOT.'classes'?>">Liste Classe</a>
            <a class="dropdown-item" href="#">Ajouter Classe</a>

        </div>
    </div>

    <div class="dropdown p-5">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                    Demande
                </button>
        <div class="dropdown-menu" aria-labelledby="triggerId">
            <a class="dropdown-item" href="demande" <?= $hidden ?> >Liste Demande</a>
            <a class="dropdown-item" href="#">Rediger Une Demande</a>

        </div>
    </div>

    <div class="dropdown p-5">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                    Module
                </button>
        <div class="dropdown-menu" aria-labelledby="triggerId">
            <a class="dropdown-item" href="<?= $constantes::WEB_ROOT.'module'?>">Liste Module</a>
            <a class="dropdown-item" href="#">Rediger Un Module</a>

        </div>
    </div>
    
    <button type="button" class="btn btn-success"><a href="http://localhost:8002/login"> Deconnection </a></button>
    
    
</div>
</nav>
