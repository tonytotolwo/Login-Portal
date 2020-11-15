<?php
session_start();
//CONNECTION TO THE DATABASE
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = "login";


$firstname = "";
$lastname = "";
$errors= array();


//CONNECTION
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 
/*

//CHECK FOR CONNECTION
 if ($con->connect_error) {
     die('connection unsuccesful: '. $connect_error);
 }else{
     echo 'connected succesfuly!';

 }
 */

 // REGISTER THE USER
 if (isset($_POST['reg_user'])) {
     //receive  the data from the form
     $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
     $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
     $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
     $password_2 = mysqli_real_escape_string($con, $_POST['password_2']);

     //Form Validating Process
    
     // by adding (array_push()) corresponding error unto $errors array
     if (empty($firstname)) { array_push($errors, "Firstname is required"); }
     if (empty($lastname)) { array_push($errors, "Lastname is required"); }
     if (empty($password_1)) { array_push($errors, "Password is required"); }
     if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
        }

    // check that a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE firstname ='$firstname' LIMIT 1";
    $result = mysqli_query($con, $user_check_query);
    $user = mysqli_fetch_assoc($result);


     if ($user) { // if user exists
        if ($user['firstname'] === $firstname) {
          array_push($errors, "The name already exists");
        }
    }

    // Finally, we register user if there are no errors in the form
    if (count($errors) == 0) {
    $password = md5($password_1);// You encrypt the password before saving in the database

    $query = "INSERT INTO users (firstname, lastname, password) 
              VALUES('$firstname', '$lastname', '$password')";
    mysqli_query($con, $query);
    $_SESSION['firstname'] = $firstname;
    $_SESSION['success'] = "You are now logged in";
    header('location: ../index.php');

    }
    
     }

    //LOGIN IN THE USER
    if(isset($_POST['login_user'])){
        $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        //CHECK IF THE FORM IS FILLED IN CORRECTLY
        if(empty($firstname)){
            array_push($errors, 'Firstname is required');
        }

        if(empty($lastname)){
            array_push($errors, 'Lastname is required');
        }

        if(empty($password)){
            array_push($errors, 'Password is required');
        }

        //CHECK FOR ERRORS
        if(count($errors) == 0) {
            $password = md5($password);
            //DO A QUERY ON THE DATABASE TO CHECK IF THE USER EXISTS
            $query = "SELECT * FROM users WHERE firstname = '$firstname' AND password= '$password'";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) == 1) {
                $_SESSION['firstname'] = $firstname;
                $_SESSION['success'] = 'You are now logged in!';
                header("Location: ./includes/dazn.php");
              
            }else{
                array_push($errors, 'Wrong credentials!');
            }
        
        
        }



    }
    
    

?>
