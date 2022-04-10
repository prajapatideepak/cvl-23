<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../public/css/style.css?v=<?php echo time()?>">
    <link rel="stylesheet" href="../public/css/navbar.css?v=<?php echo time()?>">
    <link rel="stylesheet" href="../public/css/register.css?v=<?php echo time()?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Register</title>
  </head>
  <body>
  <!-- start navbar -->
  <?php include "./navbar.php"?>
  <!-- end navbar -->

  <!-- Registration Form Start -->
  <div class="container d-flex mt-5  ">
    <div class="register">
      <form method="post" action="">
        <div class="form-group d-flex mt-3">
          <h3>Registration</h3>
        </div>
        <hr>

        <div class="form-group mr-5 ml-5">
            <label for="exampleInputEmail1">Name </label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
        </div>

        <div class="form-group mr-5 ml-5">
            <label for="exampleInputEmail1">Mobile </label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mobile">
        </div>

        <div class="form-group mr-5 ml-5">
            <label for="exampleInputEmail1">Email </label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
        </div>

        <div class="form-group mr-5 ml-5">
            <label for="exampleInputEmail1">Password </label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Password">
        </div>

        <div class="form-group mr-5 ml-5">
            <label for="exampleInputEmail1">Confirm Password </label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Confirm Password">
        </div>

        <label class="text-secondary d-flex rg-as">Register as</label>
      </form>

      <div class="container d-flex mb-3 register_as row m-auto">
        <div class="col-3 rlink">
          <div class="rounded-circle round_link d-flex justify-content-center align-items-center">
            <a href="#"><i class="fa-solid fa-user" style="color:black !important"></i></a>
          </div>
            <h6 >Visitor</h6>  
        </div>

        <div class="col-3 rlink">
          <div class="rounded-circle round_link d-flex justify-content-center align-items-center">
            <a href="./palyerReg.php" ><img src="../public/images/volleyball-player.png" height="20px" width="20px" alt=""></a>
          </div>
            <h6 >Player</h6>  
        </div>

        <div class="col-3 rlink">
          <div class="rounded-circle round_link d-flex justify-content-center align-items-center">
            <a href="./teamReg.php"><i class="fa-solid fa-users" style="color:black !important"></i></a>
          </div>
            <h6 >Team</h6>  
        </div>

        <div class="col-3 rlink">
          <div class="rounded-circle round_link d-flex justify-content-center align-items-center">
            <a href="./tournamentReg.php" ><i class="fa-solid fa-trophy" style="color:black !important"></i></a>
          </div>
            <h6 class="" style="margin-left: -20px">Tournament</h6>  
        </div>
      </div>

    </div>
  </div>
  <!-- Registration Form End -->

  
  <!-- Optional JavaScript -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>  
</body>
</html>