<!----- header start ----->
<!doctype html>
<html lang="en">
  <head>
    <!----- Required meta tags ----->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!----- Bootstrap CSS ----->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!----- Fontawesome CSS ----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <title>playerNext</title>
    <style>
        /* ----- playerNext css start ----- */
        :root{
          --clr-primary: #0c2f68;
          --clr-secondary: #f7d025;
          --clr-white:  #fff;
          --clr-black:  #000;
          --spacer: 1rem;
          --ff-primary: "PT Sans", sans-serif;
          --fw-700: 700;
          --fw-400: 400;
          --box-shadow: 0 0.25em 1.5em rgba(0, 0, 0, 0.15);
        }
        .player-registration h3{
            color: var(--clr-primary);
        }
        div.level-choose {
            /* background-color: aqua; */
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }
        div.position_custom {
            margin-top: 8px;
        }
        @media (max-width: 768px) {
            div.level-choose {
                /* background-color: aqua; */
                display: block;
                margin-top: 0;
            }

            div.position_custom {
                margin-top: 0;
            }
        }
        .tc{
            color: #f7d025;
        }
        .sbtn{
            background-color: #f7d025;
        }
        .sbtn:hover{
            color: var(--clr-white);
            background: var(--clr-primary);
        }
        .cbtn{
            background-color: var(--clr-white);
        }
        .cbtn:hover{
            color: var(--clr-white);
            background: var(--clr-primary);
        }
        .bbtn{
            background-color: var(--clr-white);
        }
        .bbtn:hover{
            color: var(--clr-white);
            background: var(--clr-primary);
        }
        
        /* ----- playerNext css end ----- */
    </style>
  </head>
<body>
<!----- header end ----->

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

<!----- playerNext start ----->


<section class="player-registration">
        <div class="container d-flex justify-content-center align-items-center my-5 ">
            <form action="./posts.php" method="POST" id="form-1">
                <div class=" container ">
                    <div class=" row">
                        <div class="col-md-12 col-sm-12 ">
                            <h3 class=" text-center">Player Registration</h3>
                        </div>
                    </div>
                    <hr style="width: 300px; height: 2px;">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 d-flex justify-content-center align-items-center">
                        </div>
                    </div>
                    <div class="container-fluid border my-1 px-5">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 d-flex justify-content-center align-item-center">
                                <h5 class="text-dark mt-4">Game Releted Information</h5>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 d-flex justify-content-center">
                                <hr style="width: 300px; height: 2px;">
                            </div>
                        </div>
                        
                        
                        <div class="d-flex justify-content-center">
                            <div>
                                
                                <div class="row ">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Height(CM)*</label>
                                            <input type="text" name="height" id="" class="form-control"
                                            placeholder="Enter Height in CM">
                                            <label for="height" class="error "
                                            style="color:red; font-size:smaller"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Weight(KG)*</label>
                                            <input type="text" name="weight" class="form-control"
                                            placeholder="Enter Weight in KG">
                                            <label for="weight" class="error "
                                            style="color:red; font-size:smaller"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="position_custom">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Player Position*</label>
                                                <select class="form-control" name="playingPosition">
                                                    <option value="0">Select Position</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                                <label for="position" id="position" class="error"
                                                style="color:red; font-size:smaller"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-2 col-sm-2 mt-2">
                                        <div class="container">
                                            <label for="" class="form-label">Level:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-5 ">
                                        
                                        <div class="mb-2 mx-1 level-choose ">
                                            
                                            <div class="container">
                                                <input type="radio" class="form-check-input" name="playingLevel" checked>
                                                <label for="" class="form-label">Beginner</label>
                                            </div>
                                            <div class="container">
                                                <input type="radio" class="form-check-input" name="playingLevel">
                                                <label for="" class="form-label">Intermediate:</label>
                                            </div>
                                            <div class="container">
                                                <input type="radio" class="form-check-input" name="playingLevel">
                                                <label for="" class="form-label">Profesional</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-5 ">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Preferred Jersey Number</label>
                                            <input type="text" name="jerseyNo" class="form-control"
                                            placeholder="Enter jersey Number">
                                            <label for="jersey" class="error "
                                            style="color:red; font-size:smaller"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 ">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Experience(Achievement)</label>
                                            <textarea name="experience" id="" cols="30" rows="5"
                                            class="form-control"></textarea>
                                            <label for="experience" class="error "
                                            style="color:red; font-size:smaller"></label>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 ">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Ddocument</label>
                                            <input type="file" name="document_upload" class="form-control">
                                            <label for="document_upload" class="error "
                                            style="color:red; font-size:smaller"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 ">
                                        <div class="container mb-3">
                                            <input type="checkbox" name="term" class="form-check-input">
                                            <p><b>I Accept all</b><b class="tc"> terms and conditions</b></p>
                                            <label for="term" class="error "
                                            style="color:red; font-size:smaller"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="mb-3 d-flex justify-content-between">
                                            <div><button class="btn bbtn btn-outline-secondary">Back</button></div>
                                            <div><button class="btn cbtn btn-outline-secondary">Cancel</button>
                                                <button type="submit" id="btnsubmit"
                                                class="btn sbtn " name="playerRegNext_submit_btn">Submit</button>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </form>
        </div>
        
</section>
<!----- playerNext end ----->

<!----- footer start ----->

<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
</body>
</html>
<!----- footer end ----->

    <script>
        $(document).ready(function () {
            // alert();
            $.validator.addMethod(
                "forSelect",
                function (value, ele, param) {
                    return value != "0";
                },
                "Select city"
            );
            $('#btnsubmit').click(function () {
                $('#form-1').validate({
                    rules: {
                        height: {
                            required: true,
                            number: true
                        },
                        weight: {
                            required: true,
                            number: true
                        },
                        position:
                        {
                            forSelect: true
                        },
                        jersey: {
                            required: true
                        },
                       

                        term: {
                            required: true
                        }

                    },
                    messages: {
                        height: {
                            required: "This field is require",
                            number: "Please Enter Number"
                        },
                        weight: {
                            required: "This field is require",
                            number: "Please Enter Number"
                        },
                        position:
                        {
                            forSelect: "Please select a positon"
                        },
                        jersey: {
                            required: "Enter Jersey number"
                        },
                       

                        term: {
                            required: "Accept terms and condition"
                        }
                    }

                });
            });

        });
    </script>