<?php
session_start();
// print_r($_POST);
require_once 'db_connection.php';

$register_ability= true;
if(!$_POST['first_name']){
    $_SESSION['name_error'] = 'Name is not Entry<br>'; 
    $register_ability = false;
}else{
    $_SESSION['old_name'] = $_POST['first_name']; 
}

if (!$_POST['email']) {
    $_SESSION['email_error'] = 'email is not Entry<br>'; 
    $register_ability = false;
} else {
    $_SESSION['old_email'] = $_POST['email'];
}


if (!$_POST['password']) {
    $_SESSION['password_error'] = 'password is not Entry<br>'; 
    $register_ability = false;
} else {
    $_SESSION['old_password'] = $_POST['password'];
} 

if (!$_POST['con_password']) {
    $_SESSION['con_password_error'] = 'con_password is not Entry<br>'; 
    $register_ability = false;
}
else{
    if ($_POST['password'] != $_POST['con_password']) {
        $_SESSION['password_error'] = 'password is not matched with confirm<br>';
        $register_ability = false;
    }
}
if (!isset($_POST['gender'])) {
    $_SESSION['gender_error']= 'gender is not Entry<br>';
    $register_ability = false;
}
 else {
    $_SESSION['old_gender'] = $_POST['gender'];
}

if($register_ability){
    
    
    $first_name = ($_POST["first_name"]);
    $email = ($_POST["email"]);
    $password = md5(($_POST["password"]));
    $con_password = md5(($_POST["con_password"]));
    $gender = ($_POST["gender"]);
    $email_address_check_query = "SELECT COUNT(*) AS email_check FROM users WHERE email = '$email'";
    $email_address_check_query_from_db = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $email_address_check_query));
    $email_check_from_db = $email_address_check_query_from_db['email_check'];

    if($email_check_from_db == 1){
        $_SESSION['email_error'] = 'your email already done.';
        header('location: register.php');
    }else{
        date_default_timezone_set('Asia/Dhaka');
        $current_date_time = date('Y-m-d H:i:s');
        // $insert_query = "INSERT INTO users (first_name, email, password, con_password, gender, created_day ) VALUE ('$first_name', '$email', '$password', '$con_password', '$gender','$current_date_time')";
        // mysqli_query(connect_to_db(), $insert_query);
        panda_insert("users", "first_name, email, password, con_password, gender, created_day","'$first_name', '$email', '$password', '$con_password', '$gender','$current_date_time'");

        $_SESSION['register_email'] = $email;
        $_SESSION['register_seccess'] = 'Your registration successfully completed! please login with your email and password. ';
        header('location:login.php');

    }
    
    
    
}
else{
    header('location:register.php');
}


?>