<?php
require_once 'db_connection.php';
$skill_name = $_POST['skill_name'];
$percentage = $_POST['percentage'];

$Insert_result = panda_insert("skills", "skill_name, percentage", "'$skill_name', '$percentage'");

if ($Insert_result) {
    header('location: skill.php');
} else {
    echo 'Somthing went wrong!';
}
?>