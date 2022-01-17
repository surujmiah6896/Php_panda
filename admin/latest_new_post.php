<?php
require_once 'db_connection.php';

//photo uploding start
$uploaded_photo =$_FILES['news_photo'];
$after_exlode = explode('.',$uploaded_photo['name']);
$new_photo_name = rand().time().".". end($after_exlode);
$uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
$new_location = '../img/news/'. $new_photo_name; 
move_uploaded_file($uploaded_photo_temporary_location,$new_location);
//photo uploding end

$news_name = $_POST['news_name'];
$news_discription = htmlspecialchars($_POST['news_discription'], ENT_QUOTES);
date_default_timezone_set('Asia/Dhaka');
$current_date_time = date('Y-m-d H:i:s');


$Insert_result_news = panda_insert("news", "news_name,news_photo,news_discription,created_date", "'$news_name', '$new_photo_name', '$news_discription', '$current_date_time'");
print_r($Insert_result_news);
if ($Insert_result_news) {
    header('location: latest_news.php');
} else {
    echo 'Somthing went wrong!';
}

?>