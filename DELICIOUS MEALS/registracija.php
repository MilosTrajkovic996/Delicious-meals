<?php

session_start();

// initializing variables
$ime = "";
$prezime  = "";
$email = "";
$korisnicko_ime = "";
$lozinka = "";
$telefon = "+381 62 2222222";
$id = rand(8, 18);
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'triglavska92378', 'delicious_meals');

// REGISTER USER
if (isset($_POST['btnRegistracija'])) {
  // receive all input values from the form
  $ime = mysqli_real_escape_string($db, $_POST['txtIme']);
  $prezime = mysqli_real_escape_string($db, $_POST['txtPrezime']);
  $email = mysqli_real_escape_string($db, $_POST['txtEmail']);
  $korisnicko_ime = mysqli_real_escape_string($db, $_POST['txtKorisnickoIme']);
  $lozinka = mysqli_real_escape_string($db, $_POST['txtLozinka']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($ime)) { array_push($errors, "Name is required"); }
  if (empty($prezime)) { array_push($errors, "Surname is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($korisnicko_ime)) { array_push($errors, "Username is required"); }
  if (empty($lozinka)) { array_push($errors, "Password is required"); }
 

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM korisnik WHERE user_name='$korisnicko_ime' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $korisnicko_ime) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($lozinka);//encrypt the password before saving in the database

  	$query = "INSERT INTO korisnik (ime, prezime,telefon,email,user_name,password) 
  			  VALUES('$id',$ime', '$prezime', '$telefon','$email','$korisnicko_ime','$password')";
  	mysqli_query($db, $query);
  	//$_SESSION['username'] = $username;
  	//$_SESSION['success'] = "You are now logged in";
  	//header('location: index.php');
  }
}
?>

