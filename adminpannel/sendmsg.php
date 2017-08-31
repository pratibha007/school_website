
<html>
    <head>
        <meta charset="UTF-8" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <title></title>
    </head>

    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    <body>
        <div class="container" >
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
                    <h2>Send us</h2>
                    </h2><hr>
                    <form action="action/sendbutton.php" method="post">
                        <?= 'reached' ?>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="txttitle" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" />
                        </div>  
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" name="txtdesc"></textarea>
                        </div>  

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="btnAdd" value="Send" />
                        </div>


                    </form>

                </div>
            </div>
        </div>

        <?php require_once 'includes/footer.php'; ?>




        <script src="../../final/js/jquery-3.2.0.min.js" type="text/javascript"></script>
        <script src="../../final/js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>