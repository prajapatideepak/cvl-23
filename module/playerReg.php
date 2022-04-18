<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../public/css/playerReg.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
<form method="POST" action="./posts.php">
    <section class="player-registration">
        <div class="container d-flex justify-content-center align-items-center my-5 ">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <h3 class=" text-center">Player Registration</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 d-flex justify-content-center align-items-center">
                        <hr style="width: 300px; height: 2px;">
                    </div>
                </div>
                <div class="container-fluid border my-1">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 d-flex justify-content-center align-item-center">
                            <h5 class="text-dark mt-4">Basic Information</h5>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 d-flex justify-content-center">
                            <!-- <hr style="width: 300px; height: 2px;"> -->
                        </div>
                    </div>


                    <div class="d-flex justify-content-center">
                        <div>
                            <div class="row">
                                <div class="col-md-12  col-sm-12 d-flex justify-content-end ">
                                    <div class="mb-3 ">
                                        <label
                                            class="custom-file-upload fa-solid fa-user mx-3  btn btn-circle btn-outline-dark d-flex justify-content-center align-items-center btn-md ">
                                            <input required type="file" />
                                        </label>
                                        <label for="Upload-Picture" class="">Choose Photo</label>

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="mb-3">
                                        <label for="FirstName" class="form-label">First Name*</label>
                                        <input required type="text" class="form-control" placeholder="Enter First Name">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="mb-3">
                                        <label for="MiddleName" class="form-label">Middle Name*</label>
                                        <input required type="text" class="form-control" placeholder="Enter Middle Name">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="mb-3">
                                        <label for="LastName" class="form-label">Last Name*</label>
                                        <input required type="text" class="form-control" placeholder="Enter First Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="mb-3">
                                        <label for="MobileNumber" class="form-label">Mobile No.(Whatsapp
                                            No)*</label>
                                        <input required type="text" class="form-control" placeholder="Enter Mobile Number">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="mb-3">
                                        <label for="Alternative" class="form-label">Alternative No.(Optional)</label>
                                        <input required type="text" class="form-control" placeholder="Enter Alternative Number">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="mb-3">
                                        <label for="Email" class="form-label">Email:*</label>
                                        <input required type="text" class="form-control" placeholder="Enter Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Date of birth*</label>
                                        <input required type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 my-4  ">
                                    <div class="container-fluid mt-1 p-0 b-danger d-flex justify-content-between">
                                        <label for="Gender" class="form-label mx-2">Gender: </label>
                                        <div class="container-fluid  m-0 p-0">
                                            <input required type="radio" name="g" checked class="form-check-input">
                                            <label for="" class="form-label">Male</label>
                                        </div>
                                        <div class="container-fluid m-0 p-0">
                                            <input required type="radio" name="g" class="form-check-input">
                                            <label for="" class="form-label">Female</label>
                                        </div>
                                        <div class="container-fluid m-0 p-0">
                                            <input required type="radio" name="g" class="form-check-input">
                                            <label for="" class="form-label">Other</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3">
                                    <div class="col-md-12 col-sm-12">
                                        <label for="Address" class="form-label">Address*</label>
                                        <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="City" class="form-label">City*</label>
                                        <select name="" id="" class="form-select">
                                            <option value="">
                                                Select City
                                            </option>
                                            <option value="Ahmedabad">
                                                Ahmedabad
                                            </option>
                                            <option value="Surat">
                                                Surat
                                            </option>
                                            <option value="Baroda">
                                                Baroda
                                            </option>
                                            <option value="Ghandhinagar">
                                                Ghandhinagar
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="State" class="form-label">State*</label>
                                        <select aria-label="default Example" class="form-select ">
                                            <option value="select">
                                                Select State
                                            </option>
                                            <option value="Gujrat">
                                                Gujarat
                                            </option>
                                            <option value="Gujrat">
                                                Maharashtra
                                            </option>
                                            <option value="Gujrat">
                                                Telangana
                                            </option>
                                            <option value="Gujrat">
                                                Bihar
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="Country" class="form-label">Country*</label>
                                        <select name="" id="" class="form-select">
                                            <option value="" selected>
                                                Select Country
                                            </option>
                                            <option value="India">
                                                India
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="Pincode" class="form-label">Pincode*</label>
                                        <input required type="text" class="form-control" placeholder="000000">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="btn_container col-md-11 col-sm-12 d-flex justify-content-between align-items-center">
                                    <button class="btn-cancel btn  border mb-5">Cancel</button>
                                    <button class="btn-next btn btn-danger mb-5 btn-color text-white">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
</body>

</html>