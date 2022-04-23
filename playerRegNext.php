<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/navbar.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="public/css/login.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="public/css/register.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="public/css/playerReg.css">
    <link rel="stylesheet" href="public/css/playerRegNext.css">
    <link rel="stylesheet" href="public/css/forgotPassword.css">
    <link rel="stylesheet" href="public/css/toastr.min.css">
    <link rel="stylesheet" href="public/css/sweetalert.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    
    <title>index</title>
</head>

<body class="">
<form method="POST" action="./posts.php" >
<div class="container">
    
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <h1 class="text-center text-danger text-bolder">Player Registration</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <hr class="col-md-4 border">
        </div>
    </div>
    <div class="container border">
        <div class="row">
            <div class="col-md-12"><h3 class="text-center text-dark">Game Information</h3></div>
        </div>
        <div class="row mt-5    ">
            <div class="col-md-3 mx-2 px-2 mt-2 ">
                <label for="" class="label-from">Height(Cm)*</label>
                <input type="text" class="form-control" placeholder="Enter Hight in cm" name="">
            </div>
            <div class="col-md-3 mx-2 px-2 mt-2">
                <label for="" class="label-from">Weight(Kg)*</label>
                <input type="text" class="form-control" placeholder="Enter Weight in kg">
            </div>
            <div class="col-md-3 mx-2 px-2 mt-2">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Player Position</label>
                    <select class="form-control form-control-sm" aria-placeholder="Select Position" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-1 ">
                <label for="" class="form-label">Select Level</label>
            </div>
            <div class="col-md-2">
                <input type="radio" class="form-check-label">
                <label for="" class="from-check-label" name="level" id="level">Beginner</label>
            </div>
            <div class="col-md-2 ">
                <input type="radio" class="form-check-label">
                <label for="" class="from-check-label" name="level1" id="level">Beginner</label>
            </div>
            <div class="col-md-2 ">
                <input type="radio" class="form-check-label">
                <label for="" class="from-check-label" name="level2" id="level">Beginner</label>
            </div>
            <div class="col-md-3 mt-1 mx-2">
                <label for="" class="label-from">Jersey Number</label>
                <input type="text" class="form-control" placeholder="Enter Jersey Number">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="" class="label-from">Address</label>
                <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-2 my-2 ">
                <div class="container border py-2  rounded">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                          aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-2 py-2">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">I Accept All Terms and Conditions</label>
                  </div>
            </div>
            <div class="row">
               
                  <div class="col-md-12 d-flex justify-content-around">
                     <div class="col-md-8 d-flex justify-content-start">
                        <div><button class="btn btn-light" name="playerRegNext_back_btn">Back</button></div>
                     </div>
                     <div class="col-md-4 d-flex justify-content-around">
                        <div>
                            <button class="btn outline-btn-danger" name="playerRegNext_cancel_btn" id="playerRegNext_cancel_btn">Cancel</button>
                        </div>
                        <div>
                            <button class="btn btn-danger" name="playerRegNext_submit_btn">Submit</button>
                        </div>
                     </div>
                  </div>
                
            </div>
        </div>
       
    </div>
</div>
</form>

<?php include 'footer.php' ?>
    
<script>
    $(document).ready(function () {
        $('#playerRegNext_cancel_btn').click(function () {
            
            window.location = ''
        })
    });
</script>