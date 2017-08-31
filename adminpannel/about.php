<html>
    <head>
        <meta charset="UTF-8" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <title></title>
        <style>
            div.gallery {
                margin: 5px;
                border: 1px solid #ccc;
                float: left;
                width: 180px;
            }

            div.gallery:hover {
                border: 1px solid #777;
            }

            div.gallery img {
                width: 100%;
                height: auto;
            }

            div.desc {
                padding: 15px;
                text-align: center;
            }
            ul.a{
                list-style-type: circle;
            }
        </style>
    </head>
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/adminStyle.css" rel="stylesheet" type="text/css"/>
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
                <div class="col-md-8">


                    <div class="gallery">
                        <a target="_blank" href="fjords.jpg">
                            <img src="assets/images/DSC_0023.JPG" alt="" width="300" height="200"/>
                        </a>
                        <div class="desc">Add a description of the image here</div>
                    </div>

                    <div class="gallery">
                        <a target="_blank" href="forest.jpg">
                            <img src="assets/images/DSC_0121.JPG" alt="" width="300" height="200"/>
                        </a>
                        <div class="desc">Add a description of the image here</div>
                    </div>

                    <div class="gallery">
                        <a target="_blank" href="lights.jpg">
                            <img src="assets/images/DSC_0200.JPG" alt="" width="300" height="200"/>
                        </a>
                        <div class="desc">Add a description of the image here</div>
                    </div>
                    <div class="gallery">
                        <a target="_blank" href="lights.jpg">
                            <img src="assets/images/DSC_0229.JPG" alt="" width="300" height="200"/>
                        </a>
                        <div class="desc">Add a description of the image here</div>
                    </div>

                    <div class="gallery">
                        <a target="_blank" href="mountains.jpg">
                            <img src="assets/images/DSC_0410.JPG" alt="" width="300" height="200">
                        </a>
                        <div class="desc">Add a description of the image here</div>
                    </div>


                    <div class="gallery">
                        <a target="_blank" href="mountains.jpg">
                            <img src="assets/images/DSC_0436.JPG" alt="" width="300" height="200">
                        </a>
                        <div class="desc">Add a description of the image here</div>
                    </div>
                </div>



                
                
               
                <h3 class="heading">
                    Facilities
                </h3>
                <div class="col-md-4">
                    <p clas="design">
                        We will be building a community of learning, where stduents, teachers and other members of the school will learn, teach and grow together. Our facilities:
                    <ul class="a">
                        <li> Montessori approach of teachings </li>
                        <li>Large and well equipped playground.</li>
                        <li>Specious classrooms with limited students.</li>
                        <li>
                            A child centered school with friendly and amicable environment.</li>
                        <li>
                            Individual guidlines, instruction and assessment.</li>
                        <li>
                            A wide range of extra -curricular activities such as scout, swimming, music dance, judo, takewondo, football, basketball, etc.
                        </li>
                        <li>
                            Junior classroom are facilitated with corners (reading corner, play corners, napping corners, story corners etc.)
                        </li>

                        <li>
                            Interactive and project based teaching.</li>
                        <li>
                            Provision of smart board.
                        </li>
                        </p>
                </div>
                 <?php require_once 'includes/footer.php'; ?>
                </body>
                </html>