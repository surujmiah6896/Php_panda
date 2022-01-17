<?php

require_once 'db_connection.php';
$company_name = $_POST['company_name'];
$duration = $_POST['duration'];
$designation = $_POST['designation'];
$discription = $_POST['discription'];

// $Insert_query = "INSERT INTO experiences (company_name,duration,designation,discription )VALUE ('$company_name','$duration','$designation','$discription') ";
// mysqli_query($bd_con,$Insert_query);
// header('location: experience.php');
$Insert_result = panda_insert("experiences", "company_name, duration, designation, discription", "'$company_name', '$duration', '$designation', '$discription'");

if($Insert_result){
    header('location: experience.php');
}else{
    echo'Somthing went wrong!';
}

?>