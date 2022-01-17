<?php
session_start();
require_once 'db_connection.php';

$email = $_POST['email'];
$password = md5($_POST['password']);

$count_query = "SELECT COUNT(*) AS login_capability FROM users WHERE email = '$email' AND password = '$password'";
$out_form_db = mysqli_query(connect_to_db(), $count_query);

$out_form_db_after_assoc = mysqli_fetch_assoc($out_form_db);
$final_output = $out_form_db_after_assoc['login_capability'];

if($final_output==1){
    $_SESSION['login_Status'] = true;
    $_SESSION['login_email'] = $email;
    $name_select_query = "SELECT first_name FROM users WHERE email ='$email'";
    $name = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $name_select_query))['first_name'];
    $_SESSION['login_name'] = $name;
    header('location: dashboard.php');
}else{
    $_SESSION['password_login_error'] = 'Your Password not match, Please try Again.';
    header('location: login.php');
}

?>