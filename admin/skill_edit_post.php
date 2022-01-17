<?php

require_once 'db_connection.php';
$skill_name = $_POST['skill_name'];
$percentage = $_POST['percentage'];
$id = $_POST['id'];



$update_query = "UPDATE skills SET 
    skill_name = '$skill_name',
    percentage = '$percentage'
    WHERE id = '$id'";

$update_info = mysqli_query(connect_to_db(), $update_query);
if (isset($update_query)) {
    echo "Update Data";
    header("location: skill.php");
} else {
    echo "Do not Update Data";
}
