<?php

require_once 'db_connection.php';
$name = $_POST['name'];
$designation = htmlspecialchars($_POST['designation'], ENT_QUOTES);
$testi_discription = htmlspecialchars($_POST['testi_discription'],ENT_QUOTES);


// $Insert_query = "INSERT INTO experiences (company_name,duration,designation,discription )VALUE ('$company_name','$duration','$designation','$discription') ";
// mysqli_query($bd_con,$Insert_query);
// header('location: experience.php');
$Insert_result = panda_insert("testimonials", "name, designation, testi_discription", "'$name','$designation', '$testi_discription'");

if($Insert_result){
    header('location: testimonials.php');
}else{
    echo'Somthing went wrong!';
}
