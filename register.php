    <!----- header start ------>
        <?php include "./header.php" ?>
    <!----- header start ----->

    <!----- navbar start ----->
    <nav class="navbar navbar-expand-lg navbar-dark" id="text">
    <a id="text" class="navbar-brand m-auto" href="index.php">Logo</a>

    <button class="navbar-toggler dark-text" type="button"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon dark-text"></span>
    </button>

    <div  class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul  class="navbar-nav m-auto">
      <li class="nav-item mr-4">
        <a  class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item mr-4">
        <a class="nav-link" href="#">News</a>
      </li>
      <li class="nav-item mr-4">
        <a class="nav-link" href="#">Registration</a>
      </li>
      <li class="nav-item mr-4">
        <a class="nav-link" href="#">About Us</a>
      </li>
    </ul>
    <li class="nav-item  navbar-right">
      <a  class="btn nav-link" href="./login.php">Login</a>
    </li>
    </div>
    </nav>
    <!----- navbar end ----->

    <!----- Registration Form Start ----->
    <div class="container d-flex" style="margin-top: 25px;">
    <div class="register col-lg-5 col-md-8 col-sm-10">
      <form method="post" id="register_form">
        <input type="hidden" name="userType" id="userType" value="">

        <div class="form-group d-flex mt-3">
          <h3>Registration</h3>
        </div>
        <hr style="width: 300px; height: 2px;">
        

        <div class="form-group mr-2 ml-2">
            <label for="">Name * </label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
            <span class="error" style="color:red; font-size:13px; display:none;">*Name contains only letters</span>
        </div>

        <div class="form-group mr-2 ml-2">
            <label for="">Mobile * </label>
            <input type="mobile" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile Number">
            <span class="error" style="color:red; font-size:13px; display:none;">*Please enter valid mobile number</span>
        </div>

        <div class="form-group mr-2 ml-2">
            <label for="">Email * </label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
            <span class="error" style="color:red; font-size:13px; display:none;">*Please enter valid email</span>
        </div>

        <div class="form-group mr-2 ml-2">
            <label for="">Password * </label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
            <span class="error" style="color:red; font-size:13px; display:none;">*Please enter valid password</span>
        </div>

        <div class="form-group mr-2 ml-2">
            <label for="">Confirm Password * </label>
            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Enter Confirm Password">
            <span class="error" style="color:red; font-size:13px; display:none;">*Password not matched</span>
        </div>

        <label class="text-secondary d-flex rg-as"><h4>Register as</h4></label>
      </form>

      <div class="container d-flex register_as row m-auto pt-1" style="margin-bottom: 10px !important;">
        <div class="col-3 rlink d-flex flex-column align-items-center justify-content-center">
          <button type="button" class="rounded-circle round_link" value="visitor" id="visitorSubmit">
           <i class="fa-solid fa-user"></i>
          </button>
            <h6 >Visitor</h6>  
        </div>

        <div class="col-3 rlink d-flex flex-column align-items-center justify-content-center">
          <button type="button" class="rounded-circle round_link " value="player" id="playerSubmit">
            <img src="./images/volleyball-player.png" height="20px" width="20px" alt="">
          </button>
            <h6 >Player</h6>  
        </div>

        <div class="col-3 rlink d-flex flex-column align-items-center justify-content-center">
          <button type="button" class="rounded-circle round_link " value="team" id="teamSubmit">
            <i class="fa-solid fa-users"></i>
          </button>
            <h6>Team</h6>  
        </div>

        <div class="col-3 rlink d-flex flex-column align-items-center justify-content-center">
          <button type="button" class="rounded-circle round_link " value="tournament" id="tournamentSubmit">
            <i class="fa-solid fa-trophy" ></i>
          </button>
            <h6 class="" style="margin-left:0px">Tournament</h6>  
        </div>
      </div>

    </div>
  </div>  
      
    <!----- Registration Form End ----->


    <!----- footer start ----->
        <?php include "./footer.php" ?>
    <!----- footer end ----->