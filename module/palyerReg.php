<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="player2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container d-flex align-items-center justify-content-center ">
        <div class="container mx-auto ">
            <div class="row g-3 ">
                <div class="col-md-10 mt-4 ">
                    <div>
                        <h1 class="text-danger text-center f-weight ">Palyer Registraton</h1>
                    </div>
                </div>
                <div class="col-md-10 d-flex align-items-center justify-content-center">
                    <div class="col-md-4">
                        <hr>
                    </div>
                </div>
            </div>

            <div class="container border">
                <div class="row g-3">
                    <div class="col-md-10 text-dark text-center f-weight">Basic info</div>
                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-person-circle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg></i>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-12 d-flex justify-content-end  "><input type="file" class="from-control"></div>
                </div>
                <div class="row g-3 mt-4">
                    <div class="col-md-3 mx-4 px-4">
                        <label for="firstname" class="form-label">First Name *</label>
                        <input type="text" class="form-control" placeholder="Enter First Name">
                    </div>
                    <div class="col-md-3 mx-4 px-4">
                        <label for="firstname" class="form-label">Middle Name *</label>
                        <input type="text" class="form-control" placeholder="Enter Middle Name">
                    </div>
                    <div class="col-md-3 mx-4 px-4">
                        <label for="firstname" class="form-label">Last Name(Surname)*</label>
                        <input type="text" class="form-control" placeholder="Enter Surname">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-3 mx-4 px-4">
                        <label for="firstname" class="form-label">Mobile No</label>
                        <input type="text" class="form-control" placeholder="Enter Mobile Number">
                    </div>
                    <div class="col-md-3 mx-4 px-4">
                        <label for="firstname" class="form-label">Alternative</label>
                        <input type="text" class="form-control" placeholder="Enter Alternate Number">
                    </div>
                    <div class="col-md-3 mx-4 px-4">
                        <label for="firstname" class="form-label">Email</label>
                        <input type="text" class="form-control" placeholder="Enter Email">
                    </div>
                </div>

                <div class="row g-3">
                    <div class="col-md-3 mx-4 px-2">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-md-8">
                        <div class="row mt-4">
                            <div class="col-md-1 mx-4 px-2">
                                <label for="" class="form-label">Gender</label>
                            </div>
                            <div class="col-md-2 mx-4 px-2">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input">
                                    <label for="male" class="from-check-label">Male</label>
                                </div>
                            </div>
                            <div class="col-md-2 mx-4 px-2">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input">
                                    <label for="male" class="from-check-label">Female</label>
                                </div>                     </div>
                            <div class="col-md-2 mx-4 px-2">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input">
                                    <label for="male" class="from-check-label">Other</label>
                                </div>                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-6 mx-4 px-4">
                        <label for="address" class="form-label">Address</label>
                        <textarea name="" id="" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-3 mx-4 px-4">
                        <label for="firstname" class="form-label">City</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Ahmedabad</option>
                            <option>Surat</option>
                            <option>Rajkot</option>
                            <option>Junagad</option>
                            <option>Ghandhinagar</option>
                        </select>
                    </div>
                    <div class="col-md-3 mx-4 px-4">
                        <label for="firstname" class="form-label">State</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Gujrat</option>
                            <option>Uttar Pradesh</option>
                            <option>Delhi</option>
                            <option>Rajsthan</option>
                            <option>Banglore</option>
                        </select>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-3 mx-4 px-4">
                        <label for="firstname" class="form-label">Country</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>India</option>
                            <option>Rasiya</option>
                            <option>America</option>
                            <option>Newyork</option>
                            <option>Australia</option>
                        </select>
                    </div>
                    <div class="col-md-3 mx-4 px-4">
                        <label for="firstname" class="form-label">Pincode</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="row g-3 my-2">
                    <div class="col-md-10 d-flex align-items-center justify-content-end">
                        <button class="btn btn-danger ">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>

</html>