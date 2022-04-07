<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/login.css?v=<?php echo time()?>">
    <link rel="stylesheet" href="../public/css/navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>index</title>
  </head>
  <body>
  
  <!-- start navbar -->
  <?php include "./navbar.php"?> 
  <!-- end navbar -->

  <!-- Login form start -->
  <div class="container d-flex mt-5">
    <div class="login-form">

      <form action="">

        <div class="form-group d-flex">
          <h3>Log in</h3>
        </div>

        <div class="form-group d-flex">
          <i class="fa-solid fa-circle-user fa-xl p-2"></i>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>

        <div class="form-group d-flex">
          <i class="fa-solid fa-lock fa-xl p-2"></i>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter password">
        </div>

        <div class="form-group d-flex">
          <h6>Forgot Password?</h6>
        </div>

        <div class="form-group d-flex">
          <input type="submit" class="form-control login-btn" id="exampleInputEmail1" aria-describedby="emailHelp" value="Log -in">
        </div>
        
        <label class="text-secondary d-flex">Or</label>
        
        <div class="social-btn" style="border: 2px solid;">

          <div class="form-group d-flex google-btn">
            <button type="button" class="btn w-100 google-btn "><i class="fa-brands fa-google mr-5"></i>Login With Google</button>
          </div>

          <div class="form-group d-flex facebook-btn">
            <button type="button" class="btn w-100 facebook-btn"><i class="fa-brands fa-facebook mr-5"></i>Login With Facebook</button>
          </div>

          <div class="form-group d-flex apple-btn">
            <button type="button" class="btn w-100 apple-btn"><i class="fa-brands fa-apple mr-5"></i>Login With Apple</button>
          </div> 
        </div>

        <div class="form-group d-flex btm-text">
          <h6 style="color: black!important">Don't have an account? <a href="" style="color: red!important; font-weight:bold; ">Register here</a> </h6>
        </div>

        </div>
      </form>
    </div>
  </div>
  <!-- <div class="container d-flex justify-content-center">
    <div class="login  d-flex justify-content-center p-4 m-4 bg-light">
      <form>
        <h1>Log in</h1><hr>
        <div class="form-group d-flex align-items-center">
          <i class="fa-solid fa-circle-user fa-xl p-2"></i>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group d-flex align-items-center">
          <i class="fa-solid fa-lock fa-xl p-2"></i>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password">
        </div>
        <label for="forgot passowrd" class="">Forgot Password?</label>
        <div>
          <input type="submit" value="Log -in" class="login-btn"><br>
          <label for="or" class="text-secondary">Or</label>
        </div>
        <div class="social-login">
          <div class="google">
              <button><i class="fa-brands fa-google"></i>Log-in with google</button>
          </div>
          <div class="google">
              <button><i class="fa-brands fa-facebook"></i>Log-in with facebook</button>
          </div>
          <div class="google">
              <button><i class="fa-brands fa-apple"></i>Log-in with apple</button>
          </div>
        </div>
        <div class="form-group">
          <label for="s">Don't have an account? <a href="./register.php">Register here </a></label>              
        </div>
      </form>                                
    </div>
  </div> -->
  <!-- Login form end -->

  <!-- Optional JavaScript -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>  
</body>
</html>