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
<?php include"./components/Header.html"?>
    <!-- ******************* Add User ****************************-->
    <div id="AddUserModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title ">Add User</h4>
                    <button type="button" class="close" data-dismiss="modal" id="modal-button">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row row-content ">
                        <div class="col-12 col-md-10 offset-1">
                            <div>
                                <h3>  Add User Account</h3>
                            </div>
                            <!-- <form method="POST" action="addUser.php"> -->
                            <form action="./Classes/AddUser.php" method="POST">
                                <div class="row form-group">
                                    <label for="forEmail" class="clo-12 col-md-4">
                                        <b>Email</b>
                                    </label>
                                    <div class="col-12 col-md-8">
                                        <input type="email" class="form-control " id="emailID" name="emailID" placeholder="Email" required>
                                    </div>
                                    <label for="password" class="clo-12 col-md-4">
                                        <b>Password</b>
                                    </label>
                                    <div class="col-12 col-md-8">
                                        <input type="password" class="form-control " id="secret" name="secret" placeholder="Password" minlength="4" maxlength="8" required>
                                    </div>
                                    <label for="acctype" class="clo-12 col-md-4">
                                        <b>Account Type</b>
                                    </label>
                                    <div class="col-12 col-md-8">
                                        <select class="form-control" id="choice" name="type">
                                            <option>Teacher</option>
                                            <option>Student</option>
                                            <option>Department Manager</option>
                                        </select>      
                                    </div>
                                    <div class="col-12 col-md-11">
                                        <div>
                                            <br>
                                            <button type="submit" id="addUser" value="submit" name="adduser" class="btn btn-info">Add User Account </button>
                                            <button type="button" class="btn btn-secondary " data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="form-row">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="SelectUser" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title ">View User</h4>
                    <button type="button" class="close" data-dismiss="modal" id="modal-button">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row row-content ">
                        <div class="col-12 col-md-10 offset-1">
                            <div>
                                <h3>View Specific User Account</h3>
                            </div>
                            <!-- <form method="POST" action="addUser.php"> -->
                            <form action="./Classes/ViewUser.php" method="POST">
                                <div class="row form-group">
                                    <label for="forEmail" class="clo-12 col-md-4">
                                        <b>Enter Email</b>
                                    </label>
                                    <div class="col-12 col-md-8">
                                        <input type="email" class="form-control " id="emailID" name="emailID" placeholder="Email" required>
                                    </div>
                                    <div class="col-12 col-md-11">
                                        <div>
                                            <br>
                                            <button type="submit" id="selectUser" value="submit" name="search" class="btn btn-info">View User</button>
                                            <button type="button" class="btn btn-secondary " data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="form-row">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="AddDept" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title ">Add Department</h4>
                    <button type="button" class="close" data-dismiss="modal" id="modal-button">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row row-content ">
                        <div class="col-12 col-md-10 offset-1">
                            <div>
                                <h3>Add Department</h3>
                            </div>
                            <!-- <form method="POST" action="addUser.php"> -->
                            <form action="./Classes/AddDepartment.php" method="POST">
                                <div class="row form-group">
                                <!--    <label for="forDeptNo" class="clo-12 col-md-4">
                                        <b>Department Number</b>
                                    </label>
                                    <div class="col-12 col-md-8">
                                        <input type="number" class="form-control " id="deptNo" name="deptNo" placeholder="Department No" minlength="1" maxlength="3" 
                                        min="1" required>
                                    </div> --->
                                    <label for="forDeptName" class="clo-12 col-md-4">
                                        <b>Department Name</b>
                                    </label>
                                    <div class="col-12 col-md-8">
                                        <input type="text" class="form-control " id="deptName" name="deptName" placeholder="Department Name" required>
                                    </div>
                                  
                                     <label for="forDeptMang" class="clo-12 col-md-4">
                                        <b>Manager Email</b>
                                    </label>
                                    <div class="col-12 col-md-8">
                                        <input type="email" class="form-control " id="DeptMang" name="deptManager" placeholder="Department Manager Email" required>
                                    </div>

                                    <label for="forDeptMName" class="clo-12 col-md-4">
                                        <b>Manager Name</b>
                                    </label>
                                    <div class="col-12 col-md-8">
                                        <input type="text" class="form-control " id="forDeptMName" name="deptMName" placeholder="Department Manager Name" required>
                                    </div>


                                    <div class="col-12 col-md-11">
                                        <div>
                                            <br>
                                            <button type="submit" id="selectUser" value="submit" name="AddDept" class="btn btn-info">Add Department</button>
                                            <button type="button" class="btn btn-secondary " data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="form-row">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main role="main">
        <!-- Marketing messaging and featurettes ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
        <!-- Three columns of text below the carousel -->
        <div class="about-header">
            <div class="col-lg-12 text-center">
                <h1>Administrator Panel</h1>
                <hr style="background-color: #eee;
            border: 0 none;
            color: #eee;
            height: 1px;
            margin-bottom: 10px;">
                </hr>
            </div>
        </div>
        <div class="container">
            <div class="row row-content ">
                <div class="col-12 col-md-4">
                    <div>
                        <h3>Add User Account</h3>
                    </div>
                    <form>
                        <div class="row form-group">
                            <div class="col-12 col-md-10">
                                <button type="button" style="height: 150px; width: 100%;" class="btn btn-success" data-toggle="modal" data-target ="#AddUserModal">Click Here To Add <br>User</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-4 ">
                    <div>
                        <h3>  View User Account</h3>
                    </div>
                    <form>
                        <div class="row form-group">
                            <div class="col-12 col-md-10">
                                <button type="button" style="height: 150px; width: 100%;" class="btn btn-twitter" data-toggle="modal" data-target="#ViewUserModal">Click
                                    Here To View <br> User Accounts </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-4 ">
                    <div>
                        <h3>Add Department</h3>
                    </div>
                    <form>
                        <div class="row form-group">
                            <div class="col-12 col-md-10">
                                <button type="button" style="height: 150px; width: 100%;" class="btn btn-warning" data-toggle="modal" data-target="#AddDept">Click
                                    Here To Add <br> Department</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ******************************************************** next row -->
        <div id="ViewUserModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title ">View User account</h4>
                    <button type="button" class="close" data-dismiss="modal" id="modal-button">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row row-content ">
                            <div class="col-12 col-md-6">
                                <div>
                                    <h3>View Specific User Account</h3>
                                </div>
                                <form>
                                    <div class="row form-group">
                                        <div class="col-12 col-md-10">
                                            <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#SelectUser" style="height: 150px; width: 100%;" class="btn btn-success ">Click Here </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12 col-md-6">
                                <div>
                                    <h3>View All User Accounts</h3>
                                    <br>
                                </div>
                                <form action="./Classes/ViewAllUsers.php" method="POST">
                                    <div class="row form-group">
                                        <div class="col-12 col-md-10">
                                            <button type="submit" style="height: 150px; width: 100%;" class="btn btn-twitter" name="view">Click
                                                here </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
    <?php include "./components/Footer.html" ?>
</body>
<!-- Bootstrap core JavaScript ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
<script>
    window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/jquery-slim.min.js "><\/script>')
</script>
<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js "></script>
<script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js "></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js "></script> <svg xmlns="http://www.w3.org/2000/svg " width="500 " height="500 " viewBox="0 0 500 500 " preserveAspectRatio="none " style="display: none; visibility: hidden;
                                position: absolute; top: -100%; left: -100%; ">
    <defs>
        <style type="text/css "></style>
    </defs><text x="0 " y="25 " style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif ">500x500</text>
</svg>
<script src="./JS/scripts.js"></script>
</html>