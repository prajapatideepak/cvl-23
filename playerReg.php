<!-- <?php include "connection.php" ?> -->
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/toastr.min.css">
    <link rel="stylesheet" href="public/css/sweetalert.css">
    <script src="https://kit.fontawesome.com/d1f5705c79.js" crossorigin="anonymous"></script>
    <title>Player Registration</title>
    <style>
        :root {
            --clr-primary: #0c2f68;
            --clr-secondary: #f7d025;
            --clr-white: #fff;
            --clr-black: #000;

            --spacer: 1rem;

            --ff-primary: "PT Sans", sans-serif;

            --fw-700: 700;
            --fw-400: 400;

            --box-shadow: 0 0.25em 1.5em rgba(0, 0, 0, 0.15);
        }



        h3 {
            text-align: center !important;
            color: var(--clr-primary) !important;
        }

        .player-form {
            width: 100%;
            height: auto;
            justify-content: center !important;
        }


        .btn-circle.btn-md {
            width: 60px;
            height: 60px;
            /* padding: 6px 0px; */
            border-radius: 30px;
            font-size: 20px;
            text-align: center;
        }

        input[type="file"] {
            display: none;
        }

        .custom-file-upload {

            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
        }

        button.btn-color {
            background-color: var(--clr-primary);
            color: var(--clr-white);
        }

        button.btn-color:hover {
            background-color: var(--clr-primary);
            color: var(--clr-white);
        }

        button.btn-cancel:hover {
            background-color: orange;
            color: var(--clr-white);
        }

        button.btn-cancel {

            color: orange;
        }
        button.btn-next
        {
            background-color:var(--clr-secondary);
            color:var(--clr-dark);
        }
        button.btn-next:hover
        {
            background-color:var(--clr-primary);
            color:var(--clr-white);
        }



        .profile-images {
            width: 70px;
            height: 70px;
            background: #fff;
            border-radius: 50%;
            overflow: hidden;
        }

        .profile-images img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .btn-color-primary:hover
        {
            background-color:var(--clr-primary);
        }
        .btn-dangers:hover
        {
             background-color:var(--clr-primary);
        }


        .custom-file input[type='file'] {
            display: none;
        }

        .custom-file button {
            cursor: pointer;
            color: #000;
            text-align: center;
            display: table;
            margin: auto;
            margin-top: 15px;

        }


        @media (max-width:767px) {
            .txt-center {
                text-align: center;
            }
        }
    </style>
</head>

<body>

<!----- navbar start ----->
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
<!----- navbar end ----->
<form method="POST" action="./posts.php" enctype="multipart/form-data" id="main-form">
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
                                <div class="row mb-5">
                                    <div class="col-md-12  col-sm-12 d-flex justify-content-end ">
                                        <div class="profile-images-card">
                                            <div class="profile-images">
                                                <img src="user1.jpg" alt="" class="" id="upload-img">
                                            </div>
                                            <div class="custom-file">
                                                <label for="profile_pic" class="btn btn-light my-2">Upload</label>
                                                <input type="file" id="profile_pic" name="profile_pic" accept="image/png, image/gif, image/jpeg">
                                                <span class="error text-danger"></span>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="mb-3">
                                            <label for="fname" class="form-label">First Name*</label>
                                            <input type="text" name="fname" id="" class="form-control"
                                                placeholder="Enter First Name">
                                            <label for="fname" id="fname-error" class="error" style="color:red; font-size:smaller;"></label>

                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="mb-3">
                                            <label for="MiddleName" class="form-label">Middle Name*</label>
                                            <input type="text" name="mname" id="mname" class="form-control"
                                                placeholder="Enter Middle Name">
                                            <label for="mname" id="mname-error" class="error " style="color:red; font-size:smaller; "></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="mb-3">
                                            <label for="LastName" class="form-label">Last Name*</label>
                                            <input type="text" name="lname" id="lname" class="form-control"
                                                placeholder="Enter First Name">
                                            <label for="lname" id="lname-error" class="error" style="color:red; font-size:smaller;"></label>
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
                                            <label for="mobile" id="mobile-error" class="error" style="color:red; font-size:smaller;"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="mb-3">
                                            <label for="alter_nativ" class="form-label">Alternative
                                                No.(Optional)</label>
                                            <input type="text" class="form-control" id="alter_nativ" name="alter_nativ"
                                                placeholder="Enter Alternative Number">
                                            <label for="alter_nativ" id="alter_nativ-error"
                                                class="error" style="color:red; font-size:smaller;"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email*</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Enter Email">
                                            <label for="email" id="email-error" class="error" style="color:red; font-size:smaller;"></label>
                                        </div>
                                        <div class="col-sm-5 messages"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="mb-3">
                                            <label for="dob" class="form-label">Date of birth*</label>
                                            <input type="date" id="dob" name="dob" value="" class="form-control">
                                            <label for="dob" id="dob-error" class=" mx-2 error" style="color:red; font-size:smaller;"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 my-4  ">
                                        <div class="container-fluid  mt-1 p-0 b-danger d-flex justify-content-between">
                                            <label for="gender" class="form-label mr-2">Gender:</label>
                                            <div class="container-fluid  m-0 p-0">
                                                <input type="radio" name="gender" class="mx-1 form-check-input" value="Male" checked>
                                                <label for="" class="form-label mx-4">Male</label>
                                            </div>
                                            <div class="container-fluid ">
                                                <input type="radio" name="gender" class="form-check-input p-0 " value="Female">
                                                <label for="" class="form-label mx-2 ">Female</label>
                                            </div>
                                            <div class="container-fluid m-0 p-0">
                                                <input type="radio" name="gender" class=" form-check-input" value="Other">
                                                <label for="" class="form-label mx-1">Other</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="mb-3">
                                             <label for="pincode" class="form-label">Pincode*</label>
                                            <input type="text" name="pincode" class="form-control" placeholder="000000">
                                            <label for="pincode" id="pincode-error" class="error" style="color:red; font-size:smaller;"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="mb-3">
                                            <label for="Country" class="form-label">Country*</label>
                                            
                                                <select name="country" id="" class="form-control">
                                                    <option value="0">
                                                        Select Country
                                                    </option>
                                                    <option value="india">
                                                        India
                                                    </option>
                                                    <option value="russia">
                                                        Russia
                                                    </option>
                                                    <option value="america">
                                                        America
                                                    </option>
                                                    <option value="japan">
                                                        Japan
                                                    </option>
                                                </select>
                                            
                                            <label for="country" id="country-error"
                                                class="error" style="color:red; font-size:smaller;"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="mb-3">
                                            <label for="State" class="form-label">State*</label>                                           
                                                <select name="state" class="form-control " id="">
                                                    <option value="0">
                                                        Select State
                                                    </option>
                                                    <option value="gujarat">
                                                        Gujarat
                                                    </option>
                                                    <option value="maharashtra">
                                                        Maharashtra
                                                    </option>
                                                    <option value="punjab">
                                                        Punjab
                                                    </option>
                                                </select>                                           
                                            <label for="state" id="state-error" class="error" style="color:red; font-size:smaller;" >
                                                </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="mb-3">
                                           
                                            <label for="" class="form-label">City*</label>
                                           
                                                <select name="city" id="" class="form-control">
                                                    <option value="0">
                                                        Select City
                                                    </option>
                                                    <option value="ahmedabad">
                                                        Ahmedabad
                                                    </option>
                                                    <option value="surat">
                                                        Surat
                                                    </option>
                                                    <option value="baroda">
                                                        Baroda
                                                    </option>
                                                    <option value="ghandhinagar">
                                                        Ghandhinagar
                                                    </option>
                                                </select>
                                            
                                            <label for="city" id="city-error" class="error " style="color:red; font-size:smaller;"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
            <!-- col-md-12 changed -->
                                    <div class="col-md-12 col-sm-12 d-flex justify-content-between align-items-center">
                                        <button class="btn btn-outline-secondary btn-color-primary mb-5" name="playerReg_cancel_btn">Cancel</button>
            <!-- btn-next added in class -->
                                        <button type="submit" id="playerReg_next_btn" name="playerReg_next_btn"
                                            class="btn btn-next mb-5 ">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </section>

<!----- footer start ----->

<!-- Optional JavaScript
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
</body>
</html> -->

<?php include 'footer.php'; ?>
<!----- footer end ----->


 <script>
        $(document).ready(function () {

            $('#profile_pic').change(function (event) {
                var file_data = $('#profile_pic').val(); 

                var file = event.target.files[0] || null;

                if (file) {
                    fileextension = file.name.split('.').pop();

                    if(!(['jpg', 'png', 'jpeg'].includes(fileextension))){
                        $(this).siblings('.error').html("File must be JPG or PNG");
                    }
                    else if(file.size > 2097152){
                        $(this).siblings('.error').html("File must be smaller than 2MB");
                    }
                    else{
                        $(this).siblings('.error').html("");
                        var x = URL.createObjectURL(event.target.files[0]);
                        $('#upload-img').attr("src", x);
                    }
                }                
                
            });

            $.validator.addMethod(
                "lettersonly",
                function (value, element) {
                    return this.optional(element) || /^[a-z]+$/i.test(value);
                },
                "Please enter only letters"
            );

            //for select city
            $.validator.addMethod(
                "forSelect",
                function (value, ele, param) {
                    return value != "0";
                },
                "Select city"
            );

            $("#playerReg_next_btn").click(function()
            {
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
                        city:
                        {
                            forSelect:true,
                        },
                        state:
                        {
                            forSelect:true,
                        },
                        country:
                        {
                            forSelect:true,
                        },
                        profile_pic:{
                            required:true,
                        }

                },
                messages:
                {
                      fname: {
                            required: "Enter First name",
                            lettersonly: "Please Enter  only latter",
                        },

                        email: {
                            required: "Please Enter Email",
                            email: "Please Enter valid Email",
                        },

                        mname: {
                            required: "Enter middle name",
                            lettersonly: "Please Enter  only latter",
                        },
                        lname: {
                            required: "Enter lastname name",
                            lettersonly: "Please Enter  only latter",
                        },
                        mobile: {
                            required: "Mobile number is required ",
                            number: "insert only numbers",
                            minlength: "insert minimum 10",
                            maxlength: "Not more than 10",
                        },
                        alter_nativ: {
                            number: "insert only numbers",
                            minlength: "insert minimum 10",
                            maxlength: "Not more than 10",
                        },
                        dob: {
                            required: "Select Date of Birth",
                        },
                        pincode: {
                            required: "Pincode required",
                            number: "Enter only digit",
                            maxlength: "max length is 6",
                        },
                        address: {
                            required: "Enter your address",
                        },
                        city:
                        {
                            forSelect:"Please select city",
                        },
                        state:
                        {
                            forSelect:"Please select state",
                        },
                        country:
                        {
                            forSelect:"Please select country",
                        }
                }
            }); 
          
            });

            
            
        });
    </script>





