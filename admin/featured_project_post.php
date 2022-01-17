<?php
require_once 'db_connection.php';

//photo uploding start
$uploaded_photo =$_FILES['projects_photo'];
$after_exlode = explode('.',$uploaded_photo['name']);
$new_photo_name = rand().time().".". end($after_exlode);
$uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
$new_location = '../img/news/'. $new_photo_name; 
move_uploaded_file($uploaded_photo_temporary_location,$new_location);
//photo uploding end

$projects_name = $_POST['projects_name'];
$projects_discription = htmlspecialchars($_POST['projects_discription'], ENT_QUOTES);
date_default_timezone_set('Asia/Dhaka');
$current_date_time = date('Y-m-d H:i:s');


$Insert_result_news = panda_insert("projects", "projects_name, projects_photo, projects_discription, created_date", "'$projects_name', '$new_photo_name', '$projects_discription', '$current_date_time'");
print_r($Insert_result_news);
if ($Insert_result_news) {
    header('location: featured_project.php');
} else {
    echo 'Somthing went wrong!';
}
