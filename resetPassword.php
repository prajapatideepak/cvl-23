<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>resetPassword</title>
  <script src="https://kit.fontawesome.com/d1f5705c79.js" crossorigin="anonymous"></script>
  <style>
    .btn{
      height: auto;
      width: 100%;
      background-color: rgb(255, 208, 0);
    }
    .h3{
      color: navy;
    }
    .icon{
      position: relative;
    }
    .icon i{
      position: absolute;
      color: rgb(112, 117, 117);
      margin-left: 5px;
      right: 0.9%;
    }
  
  </style>
</head>
<body>
  <section>
  <div class=" d-flex justify-content-center ">
    <form method = "POST" action = "./posts.php?email=<?php echo $_GET['email']; ?>&token=<?php echo $_GET['token'];?>">
      <div class="border p-5 mt-4">
        <h3 class="h3 text-center my-5">Reset password?</h3>
        <div class="mb-2 text-center ">
          <p class="mb-1">Enter your new password below, we're bring</p>
          <p class="text-center">extra safe</p>
        </div>    
        <div class="mb-3 ">
          <label for="exampleInputEmail1" class="form-label">New Password</label>
          <div class="d-flex justify-content-between icon">
            <input type="password" class="form-control" name="newPassword" id="exampleInputEmail1" placeholder="Enter New Password"
              aria-describedby="emailHelp">
            <i class="fa-solid fa-lock fa-2x"></i>
          </div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
          <div class="d-flex justify-content-between icon">
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Confirm Password">
          <i class="fa-solid fa-lock fa-2x"></i>
        </div>
        </div>
        <input type="submit" value="Reset Password" name="resetPassword_btn" class="btn mb-5 mt-3"/>
        <!-- <button type="button" class="btn btn-primary ">Reset Password</button> -->
      </div>
    </form>
  </div>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script> -->
  </section>

<?php include 'footer.php'; ?>