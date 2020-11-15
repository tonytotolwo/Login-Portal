<?php include('config.php') ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registration Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CSS FILE-->
        <link rel="stylesheet" href='../css/main.css'>
         <!--FAVICON-->
         <link rel="shortcut icon" href="../images/favicon-icon/lock.png">
        <!--BOOTSTRAP FILE-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
            <!--NAVIGATION-->
            <nav class="navbar navbar-light">
                <ul style:="float=left">
                    <li class="navbar navbar-brand"><a class="nav-link" href="../index.php">DAZN</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link">About us</a></li>
                    <li class="nav-item"><a class="nav-link">Services</a></li>
                    <li class="nav-item"><a class="nav-link">Contact Us</a></li>
                </ul>
            </nav>
            <br>
           
            <div class="container">
               
                <form method="POST" action="register.php">
                    <label>SIGN UP</label>
                        <div class="form-group">
                            <input type="text" name="firstname" class="form-control"  placeholder="Enter your First Name">
                        </div>

                        <div class="form-group">
                            <input type="text" name="lastname" class="form-control"  placeholder="Enter your Last Name">  
                         </div>

                        <div class="form-group">
                            <input type="password" name="password_1" class="form-control"  placeholder="Enter password" >
                        </div>

                        <div class="form-group">
                            <input type="password" name="password_2" class="form-control" placeholder="Confirm Your Password">
                        </div>

                        <button type="submit" class="btn btn-success" class="form-control"  name="reg_user">Sign Up</button>
                </form>
                
            </div>
    </body>      