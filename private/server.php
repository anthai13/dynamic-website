<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
include("config.php");
//encrp/decryption
include("private.php");

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM login WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
	$new_username = encryp($user['username'],$ciphering,$key,$options,$iv);
    if ($new_username === $username) {
      array_push($errors, "Username already exists");
    }
	$new_email = encryp($user['email'],$ciphering,$key,$options,$iv);
    if ($new_email === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = ($password_1);
	$new_username =encryp($username,$ciphering,$key,$options,$iv);
	$new_email = encryp($email,$ciphering,$key,$options,$iv);
	$new_password =hashing($password);
  	$query = "INSERT INTO login (username, email, password) 
  			  VALUES('$new_username','$new_email', '$new_password')";
	//$query = "INSERT INTO login (username, email, password)
          //                VALUES('$username','$email', '$password')";  	
mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
	$new_username = encryp($username,$ciphering, $key, $options, $iv);
  	$query = "SELECT * FROM login WHERE username='$new_username' ";
  	$results = mysqli_query($db, $query);
	$user = mysqli_fetch_assoc($results);
	if(password_verify( $password,$user['password']) AND $new_username == $user['username'] ) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
	}
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
//<!--credit to https://codewithawa.com/posts/admin-and-user-login-in-php-and-mysql-database -->  
}

?>
