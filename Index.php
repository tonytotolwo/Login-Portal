<?php include('includes/config.php') ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--FAVICON-->
        <link rel="shortcut icon" href="images/favicon-icon/lock.png">
        <!--CSS FILE-->
        <link rel="stylesheet" href="css/main.css">
        <!--BOOTSTRAP FILE-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
            <!--NAVIGATION-->
            <nav class="navbar navbar-light">
                <ul style:="float=left">
                    <li class="navbar navbar-brand"><a class="nav-link" href="index.php">DAZN</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link">About us</a></li>
                    <li class="nav-item"><a class="nav-link">Services</a></li>
                    <li class="nav-item"><a class="nav-link">Contact Us</a></li>
                </ul>
            </nav>

            <!--Login Area-->
            <br>
         
            <div class="container">
                <div class="jumbotron"> 
                    <form method="POST" action="index.php">
                        <?php include('includes/errors.php'); ?>
                        <label>Login Page</label>

                        <div class="form-group">
                            <input type="text" name="firstname" class="form-control" placeholder="Enter your First Name">
                        </div>

                        <div class="form-group">
                            <input type="text" name="lastname"  class="form-control" placeholder="Enter your Last Name">
                        </div>

                        <div class="form-group">
                            <input type="password" name="password"  class="form-control" placeholder="Enter password">
                        </div>
          

                        <button type="submit" class="btn btn-primary" name="login_user" >Login</button>
                    </form>
                <p>Not yet a member?<a href="includes/register.php" style=>SignUp</a></p>
              </div>
            </div>

            
        
        <script src="" async defer></script>
    </body>
</html>