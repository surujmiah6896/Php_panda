<?php

require_once 'db_connection.php';
$service_name = $_POST['service_name'];
$service_discription = htmlspecialchars($_POST['service_discription'], ENT_QUOTES);
$service_icon = htmlspecialchars($_POST['service_icon'], ENT_QUOTES);


// $Insert_query = "INSERT INTO experiences (company_name,duration,designation,discription )VALUE ('$company_name','$duration','$designation','$discription') ";
// mysqli_query($bd_con,$Insert_query);
// header('location: experience.php');
$Insert_result = panda_insert("services", "service_name, service_discription, service_icon", "'$service_name','$service_discription', '$service_icon'");

if ($Insert_result) {
    header('location: services.php');
} else {
    echo 'Somthing went wrong!';
}
