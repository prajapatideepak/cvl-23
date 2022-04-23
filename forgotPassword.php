<?php include 'header.php'; include 'connection.php'; ?>
  <style>
    .btn{
      height: auto;
      width: 100%;
      background-color: rgb(255, 208, 0);
    }
    
    .row a{
      text-align: center;
      text-decoration: none;
      color: navy;
    }
    h3{
      color: navy;
    }

    .exampleInputEmail1{
      position: relative;
    }

    #icon{
      position: relative;
    }

    #icon i{
    position: absolute;
    color: rgb(106, 108, 107);
    right: 0.9%;
    }

    .row i{
      color: rgb(255, 208, 0);
    }
  
  </style>
</head>

<body>
    
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
      <a  class="btn nav-link dark" href="./login.php">Login</a>
    </li>
    </div>
    </nav>
    <!----- navbar end ----->


  <div class=" d-flex justify-content-center ">
    <form method="POST" action="./posts.php">
      <div class="border p-5 mt-3">
        <h3 class="h3 text-center my-5">Forget your password?</h3>
        <div class="mb-1 text-center ">
          <p class="mb-1">Enter your email below to recieve your password</p>
          <p class="text-center">reset instructions</p>
        </div>
        <div class="mb-3 ">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <div class="d-flex justify-content-between" id="icon">
             <input type="email" class="form-control" id="forgot_email" name="forgot_email" placeholder="Enter Registered Email " >
              <i class="fa-solid fa-envelope fa-2x icon" aria-hidden="true"></i>
          </div>

        </div>
        <input type="submit" value="Send" class="btn mb-5 mt-3" name="forgotPass_send_btn"/>
        <div class="row">
          <a href="./login.php"><i class="fa-solid fa-left-long fa-xl"></i> Back to Login page</a>

          <!-- <div class="form-group" >
            <a href="./index.php" class="link"><i class="fa-solid fa-left-long fa-xl"></i>Back to Login page</a>
        </div> -->
        <!-- <div class="form-group d-flex">
          <a href="./index.php"><i class="fa-solid fa-left-long fa-xl"></i> Back to Login page</a>
      </div> -->
        </div>
      </div>
    </form>
  </div>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script> -->

<?php include 'footer.php'; ?>
<script>
  $(document).ready(function () {
    $('form').validate({
      rules:{
        forgot_email: {
          required: true,
          email: true,
        },
      }
    })
  });
</script>