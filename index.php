<!-- header start -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./public/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./public/css/navbar.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>

    <title>index</title>
</head>

<body onload="loaderFunction()">
<!-- header end -->

<!----- Pre Loader Start ----->
<div id="loading"></div>
    <script>
        var preloader = document.getElementById('loading');
           function loaderFunction(){
               preloader.style.display = 'none';
           }
    </script>
<!----- Pre Loader End ----->

<!-- start navbar -->
<?php include "navbar.php"?>
<!-- end navbar -->

<!-- footer start -->
<?php include "footer.php" ?>
<!-- footer end -->
