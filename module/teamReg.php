<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/teamReg.css?v=<?php echo time()?>">
    <link rel="stylesheet" href="../public/css/navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-white">
    <form action="">
    <?php include './navbar.php'?>
    <div class="teamReg_container container-fluid row">
        <div class="mt-3 mb-3 col-md-12 d-flex align-items-center justify-content-center">
            <h3 class="text-danger">Team Registeration</h3>
        </div>
        <div class="form_container container-fluid row">
                <div class="row bg-primary">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <select class="form-control" name="" id="">
                                    <option value="tournament 1">tournament 1</option>
                                    <option value="tournament 2">tournament 2</option>
                                    <option value="tournament 3">tournament 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
    
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-12">
                                   <input type="text" class="form-control">
                                </div>
                            </div>
                    </div>
                </div>
            <div class="d-flex justify-content-start col-lg-8 flex-column">
                <div class=" col-lg-12 d-flex flex-column">
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <h5 class="text-grey">Owner Information:</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group d-flex flex-column col-md-6">
                            <div class="d-flex flex-column">
                                <label for="">Team Owner Name* </label>
                                <input type="email" class="form-control" id="" placeholder="Enter email">
                            </div>
                            <div class="d-flex flex-column mt-2">
                                <label for="">Mobile No* </label>
                                <input type="email" class="form-control" id="" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="form-group d-flex flex-column col-md-6">
                            <div class="d-flex flex-column">
                                <label for="">Team Name* </label>
                                <input type="email" class="form-control" id="" placeholder="Enter email">
                            </div>
                            <div class="d-flex flex-column mt-2">
                                <label for="">Owner Email* </label>
                                <input type="email" class="form-control" id="" placeholder="Enter email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="d-flex flex-column mr-3 col-md-12">
                            <label for="">About Team* </label>
                            <textarea rows="4" cols="53" class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                <div class="owner_info_container col-lg-12 d-flex flex-column mr-auto">
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <h5 class="text-grey">Coach Information:</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group d-flex flex-column col-md-6">
                            <div class="d-flex flex-column">
                                <label for="">Coach Name* </label>
                                <input type="email" class="form-control" id="" placeholder="Enter email">
                            </div>
                            <div class="d-flex flex-column mt-2">
                                <label for="">Assistant Coach Name* </label>
                                <input type="email" class="form-control" id="" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="form-group d-flex flex-column col-md-6">
                            <div class="d-flex flex-column">
                                <label for="">Coach Mobile No* </label>
                                <input type="email" class="form-control" id="" placeholder="Enter email">
                            </div>
                            <div class="d-flex flex-column mt-2">
                                <label for="">Assistant Coach Mobile No* </label>
                                <input type="email" class="form-control" id="" placeholder="Enter email">
                            </div>
                        </div>
                    </div>
                </div>  
            </div>

            <div class="player_selection_container row d-flex flex-md-row flex-md-column align-items-center justify-content-center mb-5">
                <div class="col-md-12 mt-5 mb-5 d-flex align-items-center justify-content-center">
                    <h4>Player Selection</h4>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-12 d-flex align-items-center justify-content-center">
                                <h5>Selected List</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Status</th>
                                            <th>Change</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="bg-dark" style="height:30px; width:30px; border-radius: 50%;"></div>
                                            </td>
                                            <td>Mark</td>
                                            <td>Attacker</td>
                                            <td>unselected</td>
                                            <td>
                                                <button class="btn btn-primary" id="player_select_btn">select</button>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger" id="player_select_btn">Remove</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center align-items-center">
                                <h5>Playing Six</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center align-items-center">
                                <div class="volleyball_court_container">
                                    <span class="line1"></span>
                                    <span class="line2"></span>
                                    <div class="position1" data-toggle="tooltip" data-placement="top" title="name, positon(attacker), attacker:4"></div>
                                    <div class="position2" data-toggle="tooltip" data-placement="top" title="Player 2"></div>
                                    <div class="position3" data-toggle="tooltip" data-placement="top" title="Player 3"></div>
                                    <div class="position4" data-toggle="tooltip" data-placement="top" title="Player 4"></div>
                                    <div class="position5" data-toggle="tooltip" data-placement="top" title="Player 5"></div>
                                    <div class="position6" data-toggle="tooltip" data-placement="top" title="Player 6"></div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    </form>
    <script>
        
        $(document).ready(function(){
            $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
        });
    </script>
</body>
</html>