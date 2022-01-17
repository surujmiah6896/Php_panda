<?php

require_once 'db_connection.php';
$company_name = $_POST['company_name'];
$duration = $_POST['duration'];
$designation = $_POST['designation'];
$discription = $_POST['discription'];
$id = $_POST['id'];

// $Insert_query = "INSERT INTO experiences (company_name,duration,designation,discription )VALUE ('$company_name','$duration','$designation','$discription') ";
// mysqli_query($bd_con,$Insert_query);
// header('location: experience.php');
// $Insert_result = panda_insert("experiences", "company_name, duration, designation, discription", "'$company_name', '$duration', '$designation', '$discription'");

// if($Insert_result){
//     header('location: experience.php');
// }else{
//     echo'Somthing went wrong!';
// }

$update_query = "UPDATE experiences SET 
    company_name = '$company_name',
    duration = '$duration',
    designation = '$designation',
    discription = '$discription'
    WHERE id = '$id'";

$update_info = mysqli_query(connect_to_db(), $update_query);
if (isset($update_query)) {
    echo "Update Data";
    header("location: experience.php");
} else {
    echo "Do not Update Data";
}



?>