<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../public/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>index</title>
  </head>
  <body>
  <!-- start navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark" id="text">
    <a id="text" class="navbar-brand m-auto" href="../">Logo</a>

    <button class="navbar-toggler dark-text" type="button"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon dark-text"></span>
  </button>

  <div  class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul  class="navbar-nav m-auto">
      <li class="nav-item">
        <a  class="nav-link" href="#">Matches</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Videos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Stats</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <li class="nav-item  navbar-right">
      <a  class="btn nav-link" href="./module/login.php">Log-in</a>
    </li>
  </div>
  </nav>
  <!-- end navbar -->
    
  <!-- tournament Registration start -->
  <div class="container">
        <div class="row d-flex justify-content-center my-4">
            <h2 class="text-center text-danger">Turnament Registration</h2>
        </div>
    </div>

    <div class="container border my-4">
        <form class="my-4">
            <div class="form-group row">
                <label for="hostInformation" class="col-sm-2 col-form-label my-4">Host Information: </label>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="hname">Host Name *</label>
                        <input type="text" class="form-control" id="hname" placeholder="Enter Host Name" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="hemail">Host Email *</label>
                        <input type="email" class="form-control" id="hemail" placeholder="Enter Host Email" required>
                    </div>
                    <div class="form-group col-md-42">
                        <label for="hmobile">Mobile Number *</label>
                        <input type="text" class="form-control" id="hmobile" placeholder="Enter Mobile Number" required>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="hostInformation" class="col-sm-2 col-form-label my-4">Rafferee Information: </label>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="rname">Rafferee Name *</label>
                        <input type="text" class="form-control" id="rname" placeholder="Enter Rafferee Name" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="rmobile">Mobile Number *</label>
                        <input type="text" class="form-control" id="rmobile" placeholder="Enter Mobile Number" required>
                    </div>
                </div>
            </div>
        </form>
        <div class="container">
            <div class="col-md-12">
                <h5>Turnament Information: </h5>
            </div>
        </div>
        <form class="my-4">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="turnamentName">Turnament Name *</label>
                    <input type="text" class="form-control" id="turnamentName" placeholder="Enter Turnament Name">
                </div>
                <div class="form-group col-md-4">
                    <label for="location">Turnament Location *</label>
                    <input type="text" class="form-control" id="location" placeholder="Enter Location">
                </div>
                <div class="form-group col-md-4">
                    <label for="address">Tournament Address *</label>
                    <textarea class="form-control" id="address" rows="6" col="3"></textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="startingDate">Starting Date *</label>
                    <input type="date" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="endingDate">Ending Date *</label>
                    <input type="date" class="form-control" id="inputCity">
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputCity">Tournament Type *</label>
                    <select id="selectType" class="form-control">
                        <option>Select Type</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Age Restriction</label><br>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="no" value="option1"
                            selected="true">
                        <label class="form-check-label" for="no">No</label>
                    </div>
                    &nbsp;&nbsp;
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="yes" value="option2">
                        <label class="form-check-label" for="yes">Yes</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="selectAge">Select Age *</label>
                    <select id="selectAge" class="form-control">
                        <option>Select Age</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10">
                    <button type="button" class="btn btn-outline-warning">Cancel</button>
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-warning">Clear</button>
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-warning">Submit</button>
                </div>
            </div>
    </div>

    </form>
    </div>

  <!-- tournament Registration end -->

  <!-- Optional JavaScript -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
