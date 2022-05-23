<?php
    
use App\Core\Constantes;
?>


<!-- <form action="" method="POST" role="form">
    <legend>Form title</legend>

    <div class="form-group">
        <label for="">label</label>
        <input type="text" class="form-control" id="" placeholder="Input field">
    </div>

    

    <button type="submit" class="btn btn-primary">Submit</button>
</form> -->

<!-- <div class="contain">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Formulaire de Connexion</h4>
            <p class="card-text ml-3">

            <form action="<?= Constantes::WEB_ROOT.'login' ?>" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="login">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"  >Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            </p>
        </div>

    </div>
</div> -->

<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign in</h3>

            <form action="<?= Constantes::WEB_ROOT.'login' ?>" method="post">

                    <div class="form-outline mb-4">
                    <input type="email" id="typeEmailX-2" class="form-control form-control-lg"  name="login" placeholder="your mail"/>
                    <label class="form-label" for="typeEmailX-2">Email</label>
                    </div>

                    <div class="form-outline mb-4">
                    <input type="password" id="typePasswordX-2" class="form-control form-control-lg" name="password" placeholder="your password"/>
                    <label class="form-label" for="typePasswordX-2">Password</label>
                    </div>

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-start mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                    <label class="form-check-label" for="form1Example3"> Remember password </label>
                    </div>

                    <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

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
