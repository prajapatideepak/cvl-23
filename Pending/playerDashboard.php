<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="playerDashboard.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d1f5705c79.js" crossorigin="anonymous"></script>
    <title>Hello, world!</title>
</head>

<body>
    <div class="container ">
        <div class="row">
            <div class="col-md-4 ">
                <h3>
                    <p class="txt-cente">Welcome User</p>
                </h3>
            </div>
            <div class="col-md-8 ">
                <h3>
                    <p class=" txt-cente ">Player Information</p>
                </h3>
            </div>
            <div class="col-md-12 d-flex m-0 justify-content-center ">
                <hr style="width: 450px; height: 2px;">
            </div>
            <div class="container  d-flex justify-content-center align-item-center">
                <div class="border p-5 ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 my-3 d-flex justify-content-center">
                            <h5>You are Member Of Following Teams</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="my-3">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Sr No.</th>
                                        <th scope="col">Team Logo</th>
                                        <th scope="col">Team Name</th>
                                        <th scope="col">Team Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><i class="px-4 fa-solid fa-user"></i></td>
                                        <td>Abc_Team1</td>
                                        <td>Team 1 Details..</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td><i class="px-4 fa-solid fa-user"></i></td>
                                        <td>Abc_Team2</td>
                                        <td>Team 1 Details..</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3">
                            <div class="col-md-12 col-sm-12 ">
                                <p>If you want to Exit from the team contact the team owner.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 d-flex justify-content-center">
                            <h4>Your Profile Information</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center my-2 d-flex justify-content-center">
                            <label
                                class="custom-file-upload fa-solid fa-user  btn btn-circle btn-outline-dark d-flex justify-content-center align-items-center btn-md ">
                                <input type="file" />
                            </label>
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="col-md-12 d-flex justify-content-center">
                            <h5>Change Profile Picture</h5>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Full Name:</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 d-flex">
                                <input type="email" class="form-control mx-1" id="exampleFormControlInput1"
                                    placeholder="Abc">

                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Last Name:</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 d-flex">
                                <input type="email" class="form-control mx-1" id="exampleFormControlInput1"
                                    placeholder="Abc">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Mobile No.(Whats
                                    App):</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="mb-3 d-flex">
                                <input type="email" class="form-control mx-1" id="exampleFormControlInput1"
                                    placeholder="0123456789">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3 d-flex">
                                <label for="exampleFormControlInput1" class="form-label">Alternative Number:</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="mb-3 d-flex">
                                <input type="email" class="form-control mx-1" id="exampleFormControlInput1"
                                    placeholder="0123456789">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email:</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 d-flex">
                                <input type="email" class="form-control mx-1" id="exampleFormControlInput1"
                                    placeholder="Abc@gmail.com">

                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">DOB:</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 d-flex">
                                <input type="date" class="form-control mx-1" id="exampleFormControlInput1"
                                    placeholder="Male">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 d-flex justify-content-between">
                            <div class="container-fluid m-0 p-0">
                                <label for="" class="form-label ">Gender:</label>
                            </div>
                            <div class="container ml-1 p-0">
                                <input type="radio" name="g" class="form-check-input">
                                <label for="male" class="from-label">Male</label>
                            </div>
                            <div class="container m-0 p-0">
                                <input type="radio" name="g" class="form-check-input">
                                <label for="male" class="from-label">Female</label>
                            </div>
                            <div class="container m-0 p-0">
                                <input type="radio" name="g" class="form-check-input">
                                <label for="male" class="from-label">Other</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <label for="" class="form-label">Address:</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex">
                            <textarea name="" id="" cols="30" rows="4" class="form-control"></textarea>

                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-2">
                            <label for="" class="form-label">City:</label>
                        </div>
                        <div class="col-md-4 d-flex">
                            <select name="" id="" class="form-select ">
                                <option value="" class="">Ahmedabad</option>
                                <option value="">Surat</option>
                            </select>

                        </div>
                        <div class="col-md-2">
                            <label for="" class="form-label">State:</label>
                        </div>
                        <div class="col-md-4 d-flex">
                            <select name="" id="" class="form-select">
                                <option value="" class="">Gujrat</option>
                                <option value="">Rajsthan</option>
                            </select>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Country:</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 d-flex">
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Abc">

                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Pincode:</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 d-flex">
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="000000">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Height(Cm):</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 d-flex">
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="000.00">

                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Weight(Kg):</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 d-flex">
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="00.00">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Position:</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 d-flex">
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="xyz">

                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Level:</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 d-flex">
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="xyz">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Jersey Number:</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 d-flex">
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="000">

                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Document:</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 d-flex">
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="xyz">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="" class="form-label">Experience (Achievement):</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex">
                            <textarea name="" id="" cols="30" rows="4" class="form-control"></textarea>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 my-2 d-grid gap-2 mx-auto">
                            <button class="btn btn-suces btn-lg">
                                Update Profile
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>