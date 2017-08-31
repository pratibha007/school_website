<?php
session_start(); 
include_once'library/dbconnection.php';
$query="select * from contact order by id";
$res=mysqli_query($conn,$query);
?>
<html>
    <head>
        <meta charset="UTF-8" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <title></title>
    </head>
    
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center text-uppercase">
                        Welcome to Columbus International School 
                    </h1><br>

                </div>
            </div>
        </div>
        <?php require_once 'includes/nav.php'; ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Blog Details

                    </h2><hr>
                    <a href="sendmsg.php"><button class="btn btn-primary">Send Message</button></a>
                    <hr>
                    



            <?php require_once 'includes/footer.php'; ?>




            <script src="../../final/js/jquery-3.2.0.min.js" type="text/javascript"></script>
            <script src="../../final/js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>