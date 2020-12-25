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

    <div class="container">
        <div style="margin-top:70px" class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item active">Contact Us</li>
            </ol>

        </div>
    </div>
    <main role="main">
        <!-- Marketing messaging and featurettes ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
        <!-- Three columns of text below the carousel -->
        <div class="about-header">
            <div class="col-lg-12 text-center">
                <h1>Contact Us</h1>
                <hr style="background-color: #eee;
            border: 0 none;
            color: #eee;
            height: 1px;
            margin-bottom: 10px;">
                </hr>
            </div>
        </div>
        <div class="container">


            <div class="row row-content">
                <div class="col-12 col-md-6">
                    <h3>Location Information</h3>
                    <h5>Our Address</h5>
                    <address style="color:floralwhite">
                        Hostel Number 6, Quaid-I-Azam University Isalamabad <br>
                        <i class="fa fa-phone fa-lg"></i>: +852 1234 5678<br>
                        <i class="fa fa-fax fa-lg"></i>: +852 8765 4321<br>
                        <i class="fa fa-envelope fa-lg"></i>:
                        <a id="footer" href="mailto:Qlms@hotmail.com">Qlms@hotmail.com</a>
                    </address>
                    <div style="margin-top:10px ;">
                    <div class="btn-group" role="group">
                        <a role="button" class="btn btn-primary" href="+3812345678"><i class="fa fa-phone"></i> Home</a>
                        <a role="button" class="btn btn-info"><i class="fa fa-skype"></i> Skype</a>
                        <a role="button" class="btn btn-success" href="mailto:Qlms@hotmail.com"><i class="fa fa-envelope-o"></i> Email</a>
                    </div>
                </div>
                </div>
               
                <div class="col-12 col-sm-6 ">
                    <h3>MAP</h3>
                    <h5>Map of our Location</h5>
                    <iframe width="450" height="250" style="border:0" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=boys%20hostel%206%20QAU+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                    </iframe>

                </div>
                
            </div>

            <div class="row row-content">
                <div class="col-12">
                    <h3>Send us your Feedback</h3>
                </div>
                <div class="col-12 col-md-9">
                    <form>
                        <div class="form-group row">
                            <label for="firstname" class="col-md-2 col-form-label">First Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required maxlength="10">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-2 col-form-label">Last Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required maxlength="10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telnum" class="col-12 col-md-2 col-form-label">Contact Tel</label>
                            <div class="col-5 col-md-3">
                                <input type="number" onkeypress=" return event.charCode >= 48" min="0" class="form-control" id="areacode" name="areacode" placeholder="Area Code" required maxlength="4">
                            </div>
                            <div class="col-7 col-md-7">
                                <input type="number" onkeypress=" return event.charCode >= 48" min="0" class="form-control" id="telnum" name="telnum" placeholder="Tel. Number" required maxlength="7">
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="emailid" class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                                <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-2">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="approve" id="approve" value="">
                                    <label class="form-check-label" for="approve">
                                        <strong>May we contact you?</strong>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 offset-md-1">
                                <select class="form-control">
                                    <option>Tel.</option>
                                    <option>Email</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="feedback" class="col-md-2 col-form-label">Your Feedback</label>
                            <div class="col-md-10">
                                <textarea class="form-control" id="feedback" name="feedback" rows="12" required maxlength="1000"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-md-2 col-md-10">
                                <button type="submit" class="btn btn-primary">Send Feedback</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md">
                </div>
            </div>

        </div>
        <!-- /.row -->
        <!-- START THE FEATURETTES -->
        <!-- /END THE FEATURETTES -->
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
<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/porequiredpper.min.js"></script>
<script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script> <svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;">
    <defs>
        <style type="text/css"></style>
    </defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text>
</svg>


<script src="./JS/scripts.js"></script>

</html>