welcome to Prof form

<?php
    
use App\Core\Constantes;
?>


<!-- <style>
    .contain{
        display: flex;
        align-items: center;
        flex-direction: column;
    }
</style>

<form class="row g-3 needs-validation" novalidate action="" method="POST">

    <div class="contain">
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">First name</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
            
        </div>

        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Last name</label>
            <input type="text" class="form-control" id="validationCustom02" value="" required>
        </div>

        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Last name</label>
            <input type="text" class="form-control" id="validationCustom02" value="" required>
        </div>


        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </div>
</form> -->



<section class="vh-100" style="background-color: #9ACD32;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign in</h3>

            <form action="<?= Constantes::WEB_ROOT.'ajout-prof' ?>" method="post">

                    <div class="form-outline mb-4">
                    <input type="text" id="typeEmailX-2" class="form-control form-control-lg"  name="nomComplet" placeholder="nom complet"/>
                    <label class="form-label" for="typeEmailX-2">Nom Complet</label>
                    </div>

                  

                    <div class="form-outline mb-4">
                    <input type="text" id="typePasswordX-2" class="form-control form-control-lg" name="grade" placeholder="grade"/>
                    <label class="form-label" for="typePasswordX-2">Grade</label>
                    </div>

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-start mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                    <label class="form-check-label" for="form1Example3"> Remember password </label>
                    </div>

                    <button class="btn btn-primary btn-lg btn-block" type="submit">Valider</button>
                    <a href="#">Se Reinscrire</a>

                    <!-- <hr class="my-4">

                    <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
                    type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
                    <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
                    type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button>
        -->
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>