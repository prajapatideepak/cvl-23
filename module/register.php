<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../public/css/style.css?v=<?php echo time()?>">
    <link rel="stylesheet" href="../public/css/navbar.css?v=<?php echo time()?>">
    <link rel="stylesheet" href="../public/css/register.css?v=<?php echo time()?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="../public/css/sweetalert.css">
    <link rel="stylesheet" href="../public/css/toastr.min.css">

    <title>Register</title>
  </head>
  <body>
  <!-- start navbar -->
  <?php include "./navbar.php"?>
  <!-- end navbar -->

  <!-- Registration Form Start -->

  <div class="container d-flex" style="margin-top: 25px;">
    <div class="register col-lg-5 col-md-8 col-sm-10">
      <form method="post" id="register_form">
        <input type="hidden" name="userType" id="userType" value="">
        <div class="form-group d-flex mt-3">
          <h3>Registration</h3>
        </div>
        <hr style="width: 200px; height: 2px;">
        

        <div class="form-group mr-2 ml-2">
            <label for="">Name* </label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
            <span class="error" style="color:red; font-size:13px; display:none;">*Name contains only letters</span>
        </div>

        <div class="form-group mr-2 ml-2">
            <label for="">Mobile* </label>
            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile Number">
            <span class="error" style="color:red; font-size:13px; display:none;">*Please enter valid mobile number</span>
        </div>

        <div class="form-group mr-2 ml-2">
            <label for="">Email* </label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
            <span class="error" style="color:red; font-size:13px; display:none;">*Please enter valid email</span>
        </div>

        <div class="form-group mr-2 ml-2">
            <label for="">Password* <br/> <em style="font-size: 13px; color: gray">(Note: Minimum eight characters, at least one letter and one number)</em> </label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
            <span class="error" style="color:red; font-size:13px; display:none;">*Please enter valid password</span>
        </div>

        <div class="form-group mr-2 ml-2">
            <label for="">Confirm Password* </label>
            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Enter Confirm Password">
            <span class="error" style="color:red; font-size:13px; display:none;">*Password not matched</span>
        </div>

        <label class="text-secondary d-flex rg-as"><h4>Register as</h4></label>
      </form>

      <div class="container d-flex register_as row m-auto pt-1" style="margin-bottom: 10px !important;">
        <div class="col-3 rlink d-flex flex-column align-items-center justify-content-center">
          <button type="button" class="rounded-circle round_link d-flex justify-content-center align-items-center" value="visitor" id="visitorSubmit">
           <i class="fa-solid fa-user"></i>
          </button>
            <h6 >Visitor</h6>  
        </div>

        <div class="col-3 rlink d-flex flex-column align-items-center justify-content-center">
          <button type="button" class="rounded-circle round_link d-flex justify-content-center align-items-center" value="player" id="playerSubmit">
            <img src="../public/images/volleyball-player.png" height="20px" width="20px" alt="">
          </button>
            <h6 >Player</h6>  
        </div>

        <div class="col-3 rlink d-flex flex-column align-items-center justify-content-center">
          <button type="button" class="rounded-circle round_link d-flex justify-content-center align-items-center" value="team" id="teamSubmit">
            <i class="fa-solid fa-users"></i>
          </button>
            <h6>Team</h6>  
        </div>

        <div class="col-3 rlink d-flex flex-column align-items-center justify-content-center">
          <button type="button" class="rounded-circle round_link d-flex justify-content-center align-items-center" value="tournament" id="tournamentSubmit">
            <i class="fa-solid fa-trophy" ></i>
          </button>
            <h6 class="" style="margin-left:0px">Tournament</h6>  
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script  src="../public/js/sweetalert.min.js"></script>
  <script  src="../public/js/toastr.min.js"></script>

  <script>

    $(document).ready(function(){
      
      $('input').keyup(function(){
          var error = 0;

          var filedName = $(this).attr('name');
          
          var name = $('#name').val();
          var mobile = $('#mobile').val();
          var email = $('#email').val();
          var password = $('#password').val();
          var confirmPassword = $('#confirmPassword').val();
      
          //Name validation
          var regName = /^[a-zA-Z ]+$/;
          
          if(filedName == 'name'){

            if(name == '') {
              // $(this).closest('div').find('.error').hide();
              error++;
            }
            else if(!regName.test(name)){
              error++;
              $(this).closest('div').find('.error').show();
              document.getElementById('name').focus();
            } 
            else{
              $(this).closest('div').find('.error').hide();
            }
          }

        //mobile nubmer verification
          var regMobile= /^[0-9]+$/;

          if(filedName == 'mobile'){
            
            if(mobile == '') {
              // $(this).closest('div').find('.error').hide();
              error++;
            }
            else if(!regMobile.test(mobile) || (mobile.length > 0 && mobile.length < 10) || mobile.length > 10) {
              error++;
              $(this).closest('div').find('.error').show();
              document.getElementById('mobile').focus();
            }
            else{
              $(this).closest('div').find('.error').hide();
            }
          }



      // //Email validation

        var regEmail= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;        
        if(filedName == 'email'){
          if(email == '') {
            // $(this).closest('div').find('.error').hide();
            error++;
          }
          else if(!regEmail.test(email)) {
            error++;
            $(this).closest('div').find('.error').show();
            document.getElementById('email').focus();
          }
          else{
            $(this).closest('div').find('.error').hide();
            $.ajax({
              url: "./posts.php",
              data: {'check_email_exists':1, 'email' : email},
              type: 'POST',
              success: function (data) {
                  var data = JSON.parse(data);
                  console.log(data);
                  if(data.status == 'error'){
                    error++;
                    toastr.error(data.msg, 'Error : ',{
                      progressBar:true,
                      timeOut: 3000
                    });
                  }
              }
            });

          }
        }


      //password validation

        //Minimum eight characters, at least one letter and one number
        var regPassword= /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
        
        if(filedName == 'password'){
          if(password == '') {
            // $(this).closest('div').find('.error').hide();
            error++;
          }
          else if(!regPassword.test(password)) {
            error++;
            $(this).closest('div').find('.error').show();
            document.getElementById('password').focus();
          }
          else{
            $(this).closest('div').find('.error').hide();
          }
        }


          // // confirmPassword validation

          var password = $('#password').val();
          
          if(filedName == 'confirmPassword'){
            if(confirmPassword == '') {
              $(this).closest('div').find('.error').hide();
              error++;
            }
            else if(password != confirmPassword) {
              error++;
              $(this).closest('div').find('.error').show();
              document.getElementById('confirmPassword').focus();
            }
            else{
              $(this).closest('div').find('.error').hide();
            }
          }

          if(error == 0 && name.length > 0 && mobile.length > 0 && email.length > 0 && password.length > 0 && confirmPassword.length > 0){
            // $('.button_container').show();
          }
          else{
            // $('.button_container').hide();

          }
      });

      $('button').click(function(){
        $('#userType').val($(this).val());
        $(".register_as").css('pointer-events','none');
        let myform = document.getElementById("register_form");
        let fd = new FormData(myform);

          $.ajax({
              url: "./posts.php",
              data: fd,
              type: 'POST',
              processData: false,
              contentType: false,
              success: function (data) {
                $(".register_as").css('pointer-events','auto');
                var data = JSON.parse(data);
                if(data.status == 'error'){
                  toastr.error(data.msg, 'Error : ',{
                    progressBar:true,
                    timeOut: 3000
                  });
                }
                else{
                    swal({
                        title: "<span style='font-size:28px'>Registration successful</span>",
                        text: "<span style='font-size:18px'>We have sent a verification email</span>",
                        type: "success",
                        html: true,
                        confirmButtonColor: "#5587dd",
                        confirmButtonText: "Ok",
                      },
                      function(isConfirm){
                        if (isConfirm) {
                          window.location = "login.php";
                        } 
                      });
                }
              }
        });
      });
    });
  </script> 

</body>
</html>