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
      <!-- <a  class="btn nav-link" href="./login.php">Login</a> -->
    </li>
    </div>
    </nav>
    <!----- navbar end ----->

    <!----- Login form start ----->
    <div class="container d-flex mt-5 login-bg-img">
    <div class="login-form">

      <form action="./posts.php" id="login_form" method="POST">

        <div class="form-group d-flex">
          <h3>Login</h3>
        </div>
        <hr style="width: 300px; height: 2px;">


        <div class="form-group d-flex">
          <i class="fa-solid fa-circle-user fa-xl p-2"></i>
          <div class="container-fluid d-flex flex-column justify-content-center align-items-center">
            <input  type="email" required id="email" name="email" class="form-control" placeholder="Enter Email">
            <label for="email" class="error" style="color:red; font-size:13px;" id="email-error"></label>
          </div>
        </div>


        <div class="form-group d-flex">
          <i class="fa-solid fa-lock fa-xl p-2"></i>
          <div class="container-fluid d-flex flex-column justify-content-center align-items-center">
            <input  type="password" required id="password" name="password" class="form-control" placeholder="Enter Password">
          </div>
        </div>

        <div class="form-group d-flex">
            <div class="container-fluid d-flex flex-column justify-content-center align-items-center">
                <a href="#" class="ml-auto forgotPassword-link">Forgot Password?</a>
            </div>
        </div>

        <div class="form-group d-flex">
            <div class="container-fluid d-flex flex-column justify-content-center align-items-center">
                <input type="submit" class="form-control login-btn font-weight-bold" id="login_btn" name="login_btn" value="Login">
            </div>    
        </div>
        
        <label class="text-secondary d-flex">Or</label>
        
    <div class="container">
    <div class="mb-2  ">
    <a href="#"  class="btns  col-12 p-2 " >
        <i class="fa-brands fa-google mr-4"></i>
          <span>
            Login With Google
          </span>  
    </a>
    </div>    
      <div class=" mb-2 ">
        <a href="#" class="btns col-12 p-2" ><i class="fa-brands fa-facebook  mr-4"></i>
            <span>
              Login With Facebook
            </span>
        </a>
      </div>    
      <div class=" mb-2 ">
        <a href="#" class="btns col-12 p-2" >
          <i
          class="fa-brands fa-apple  mr-4"></i>
          <span>
            Log in With Apple
          </span>
        </a>
      </div>
    </div>
      <div class="form-group d-flex bottom-text">
        <h6>Don't have an account? <a href="./register.php" class="bottom-text-link">Register here</a> </h6>
      </div>
        </div>
      </form>
    </div>
    </div>
    <!----- Login form end ----->

    <!----- footer start ----->
        <?php include "./footer.php" ?>
    <!----- footer end ----->
    