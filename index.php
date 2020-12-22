<!DOCTYPE html>
<html lang="en">
<head>
    <style class="vjs-styles-defaults">
        .video-js {
            width: 300px;
            height: 150px;
        }
        .vjs-fluid {
            padding-top: 56.25%
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title>QLMS</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/carousel/carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./CSS/styles.css">
    </head>

<body cz-shortcut-listen="true">
    <?php include "./components/Header.html" ?>
    <main role="main">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active"> <img class="first-slide" src="images/qau.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left" id="carousel-color">
                            <h1>Quaidian Learning Management System</h1>
                            <p>Welcome!</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item"> <img class="second-slide" src="images/library.png" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption" id="carousel-color">
                            <h1>QLMS</h1>
                            <p>QLMS is a holistic, end-to-end software solution for the planning, execution, documentation, tracking, and reporting of knowledge or skill-based courses and training programs.</p>
                            <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
                        </div>
                    </div>
                </div>
                <div class="carousel-item"> <img class="third-slide" src="images/outdoors.JPG" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-right" id="carousel-color">
                            <h1>Why QLMS?</h1>
                            <p>The main objective of QLMS is to enhance the learning process. A Learning Management System not only delivers content, but also handles registering courses, course administration, skill gap analysis.</p>
                            <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
                            <p>The main objective of Learning Management Systems is to enhance the learning process. A Learning Management System not only delivers content, but also handles registering courses, course administration, skill gap analysis.</p>
                            <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
        </div>
        <!-- Marketing messaging and featurettes ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
        <div class="container marketing">
            <!-- Three columns of text below the carousel -->
            <!-- /.row -->
            <!-- START THE FEATURETTES -->
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Features</h2>
                    <h2 class="featurette-heading"><span class="text-muted">Intuitive User Interface</span></h2>
                    <p class="lead">QLMS provides an intuitive user interface that’s easy to use and meshes well with your eLearning.</p>
                </div>
                <div class="col-md-5"> <img class="featurette-image img-fluid mx-auto" data-src="holder.js/auto" alt="500x500" style="width: auto; height: 400px;" src="images/UI.png" data-holder-rendered="true"> </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading"><span class="text-muted">Multiplatform Accessibility</span></h2>
                    <p class="lead">With Efficient Responsive Layout and Compatibility, QLMS can be accessed from any device, anywhere</p>
                </div>
                <div class="col-md-5 order-md-1"> <img class="featurette-image img-fluid mx-auto" data-src="holder.js/auto" alt="500x500" src="images/multi.png" data-holder-rendered="true" style="width: auto; height: 500px;"> </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading"><span class="text-muted">Speed and Momentum</span></h2>
                    <p class="lead">Our QLMS is equipped with latest technology to handle large user traffic and supporting effecient API for its services.</p>
                </div>
                <div class="col-md-5"> <img class="featurette-image img-fluid mx-auto" data-src="holder.js/auto" alt="500x500" src="images/speed.png" data-holder-rendered="true" style="width: auto; height: auto;"> </div>
            </div>
            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->
        </div>
        <!-- /.container -->
        <!-- FOOTER -->
    </main>
    <?php include "./components/Footer.html" ?>
   
</body>
<!-- Bootstrap core JavaScript ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script> <svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;">
        <defs>
            <style type="text/css"></style>
        </defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text>
    </svg>

    </body>

    <script src="./JS/scripts.js" ></script>

</html>
