<?php 

// checking is the form was submitted successfully
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // fetching out the details from the form
    $fullName = htmlspecialchars($_POST['fullName'], ENT_QUOTES, 'UTF-8');
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');
    $Conpassword = htmlspecialchars($_POST['confirmPassword'], ENT_QUOTES, 'UTF-8');
    $check = isset($_POST['check']) ? $_POST['check'] : null;
    // remaining the profile image
    $profileImage = isset($_POST['profileImage']) ? $_FILES['profileImage'] : null;
    

    // including all necessary files
    require_once __DIR__. "/../config/dbh.php";
    require_once __DIR__. "/../config/session.php";
    require_once __DIR__. "/../public/signup.classes.php";
    require_once __DIR__. "/../public/signupContr.php";

    // With the help of require_once we are able to get the signup controller class 
    // which is responsible for all form validation 
    $signup = new SignupContr($fullName, $username, $email, $password, $Conpassword, $check, $_FILES);

    // signUser is a method created in the controller class for final execution 
    header("Location: ../inc/login.php?error=none");
    $signup->signUser();

    
    
}