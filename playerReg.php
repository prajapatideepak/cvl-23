<?php include "connection.php" ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/css/playerReg.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/toastr.min.css">
    <link rel="stylesheet" href="public/css/sweetalert.css">
    <script src="https://kit.fontawesome.com/d1f5705c79.js" crossorigin="anonymous"></script>
    <title>Player Registration</title>
</head>

<body>

<!-- start navbar -->
  
<nav class="navbar navbar-expand-lg navbar-dark" id="text">
    <a id="text" class="navbar-brand m-auto" href="./">Logo</a>
    <button class="navbar-toggler dark-text" type="button"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon dark-text"></span>
  </button>

  <div  class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul  class="navbar-nav m-auto">
      <li class="nav-item mr-4">
        <a  class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Roles
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Visitor</a>
          <a class="dropdown-item" href="#">Player</a>
          <a class="dropdown-item" href="#">Team Owner</a>
          <a class="dropdown-item" href="#">Tournament/Host</a>
        </div>
      </li>
      <li class="nav-item mr-4">
        <a class="nav-link" href="#">Tournament</a>
      </li>
      <li class="nav-item mr-4">
        <a class="nav-link" href="#">News</a>
      </li>
      <li class="nav-item mr-4">
          <a class="nav-link" href="#">Gallery</a>
    </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Register As
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Player</a>
          <a class="dropdown-item" href="#">Team</a>
          <a class="dropdown-item" href="#">Tournament/Host</a>
        </div>
      </li>
    </ul>
    <!-- <li class="nav-item  navbar-right">
      <a  class="btn nav-link" href="./module/login.php">LogIn</a>
    </li> -->
  </div>
  </nav>
  <!-- end navbar -->
<form method="POST" action="./posts.php" enctype="multipart/form-data">
<section class="player-registration">
        <div class="container d-flex justify-content-center align-items-center my-5 ">
            <form action="" method="get" id="forms">
                <div class=" container ">
                    <div class=" row">
                        <div class="col-md-12 col-sm-12 ">
                            <h3 class=" text-center">Player Registration</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 d-flex justify-content-center align-items-center">
                            <hr style="width: 300px; height: 2px;">
                        </div>
                    </div>
                    <div class="container-fluid border">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 d-flex justify-content-center align-item-center">
                                <h5 class="text-dark mt-4">Basic Information</h5>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 d-flex justify-content-center">
                                <hr style="width: 200px; height: 2px;">
                            </div>
                        </div>

          <!-- row property added -->
                        <div class="row d-flex justify-content-center">
          <!-- whole class added -->
                            <div class="col-lg-8 col-md-12">    
                                <div class="row">
                                    <div class="col-md-12  col-sm-12 d-flex justify-content-end">
                                        <div class="mb-3 ">
                                            <label
                                                class="custom-file-upload fa-solid fa-user mx-3  btn btn-circle btn-outline-dark d-flex justify-content-center align-items-center btn-md">
                                                <input type="file"  id="profile_pic" name="profile_pic"/>
                                            </label>
                                            <label for="profile_pic" class="">Choose Photo</label>

                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="mb-3">
                                            <label for="fname" class="form-label">First Name*</label>
                                            <input type="text" name="fname" id="fname" class="form-control"
                                                placeholder="Enter First Name">
                                            <label for="fname" id="fname-error" class="error"></label>

                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="mb-3">
                                            <label for="MiddleName" class="form-label">Middle Name*</label>
                                            <input type="text" name="mname" id="mname" class="form-control"
                                                placeholder="Enter Middle Name">
                                            <label for="mname" id="mname-error" class="error"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="mb-3">
                                            <label for="LastName" class="form-label">Last Name*</label>
                                            <input type="text" name="lname" id="lname" class="form-control"
                                                placeholder="Enter First Name">
                                            <label for="lname" id="lname-error" class="error"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="mb-3">
                                            <label for="MobileNumber" class="form-label">Mobile No.(Whatsapp
                                                No)*</label>
                                            <input type="text" class="form-control" id="mobile" name="mobile"
                                                placeholder="Enter Mobile Number">
                                            <label for="mobile" id="mobile-error" class="error"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="mb-3">
                                            <label for="alter_nativ" class="form-label">Alternative
                                                No.(Optional)</label>
                                            <input type="text" class="form-control" id="alter_nativ" name="alter_nativ"
                                                placeholder="Enter Alternative Number">
                                            <label for="alter_nativ" id="alter_nativ-error"
                                                class="error"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email*</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Enter Email">
                                            <label for="email" id="email-error" class="error"></label>
                                        </div>
                                        <div class="col-sm-5 messages"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="mb-3">
                                            <label for="dob" class="form-label">Date of birth*</label>
                                            <input type="date" id="dob" name="dob" value="" class="form-control">
                                            <label for="dob" id="dob-error" class="error"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 my-4  ">
                                        <div class="container-fluid  mt-1 p-0 b-danger d-flex justify-content-between">
                                            <label for="gender" class="form-label mx-2">Gender: </label>
                                            <div class="container-fluid  m-0 p-0">
                                                <input type="radio" name="gender" class="form-check-input" value="Male" checked>
                                                <label for="" class="form-label">Male</label>
                                            </div>
                                            <div class="container-fluid m-0 p-0">
                                                <input type="radio" name="gender" class="form-check-input" value="Female">
                                                <label for="" class="form-label">Female</label>
                                            </div>
                                            <div class="container-fluid m-0 p-0">
                                                <input type="radio" name="gender" class="form-check-input" value="Other">
                                                <label for="" class="form-label">Other</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="mb-3">
                                            <label for="city" class="form-label">City*</label>
                                            <input type="text" class="form-control" id="city" name="city" placeholder="Enter city">
                                            <label for="city" id="city-error" class="error"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="mb-3">
                                            <label for="state" class="form-label">State*</label>
                                            <input type="text" class="form-control" id="state" name="state"
                                                placeholder="Enter state">
                                            <label for="state" id="state-error" class="error"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="mb-3">
                                            <label for="country" class="form-label">Country*</label>
                                            <input type="text" class="form-control" id="country" name="country"
                                                placeholder="Enter country">
                                            <label for="country" id="country-error" class="error"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="mb-3">
                                            <label for="pincode" class="form-label">Pincode*</label>
                                            <input type="text" name="pincode" class="form-control" placeholder="000000">
                                            <label for="pincode" id="pincode-error" class="error"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
            <!-- col-md-12 changed -->
                                    <div class="col-md-12 col-sm-12 d-flex justify-content-between align-items-center">
                                        <button class="btn border btn-cancel mb-5" name="playerReg_cancel_btn">Cancel</button>
            <!-- btn-next added in class -->
                                        <button type="submit" id="playerReg_next_btn" name="playerReg_next_btn"
                                            class="btn btn-danger mb-5 btn-next">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </section>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script>
    $(document).ready(function () {
  //for letters only
  $.validator.addMethod(
    "lettersonly",
    function (value, element) {
      return this.optional(element) || /^[a-z]+$/i.test(value);
    },
    "Please enter only letters"
  );

  // //for select city
  // $.validator.addMethod(
  //   "forSelect",
  //   function (value, ele, param) {
  //     return value != "0";
  //   },
  //   "Select city"
  // );

  $("form").validate({
    rules: {
      fname: {
        required: true,
        lettersonly: true,
      },
      email: {
        required: true,
        email: true,
      },
      mname: {
        required: true,
        lettersonly: true,
      },
      lname: {
        required: true,
        lettersonly: true,
      },
      mobile: {
        required: true,
        number: true,
        minlength: 10,
        maxlength: 10,
      },
      alter_nativ: {
        number: true,
        minlength: 10,
        maxlength: 10,
      },
      city: {
        required: true,
        lettersonly: true,
      },
      state: {
        required: true,
        lettersonly: true,
      },
      country: {
        required: true,
        lettersonly: true,
      },
      dob: {
        required: true,
      },
      pincode: {
        required: true,
        number: true,
        maxlength: 6,
      },
      address: {
        required: true,
      },
    },
    // messages: {
    //   fname: {
    //     required: "Enter First Name",
    //     lettersonly: "Please Enter only letters",
    //   },

    //   email: {
    //     required: "Please Enter Email",
    //     email: "Please Enter valid Email",
    //   },
    // },
  });
  $("#btnsubmit").on("submit", function () {});
});

</script>

<?php include "footer.php" ?>


