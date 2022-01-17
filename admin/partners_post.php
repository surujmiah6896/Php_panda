<?php
require_once 'db_connection.php';

//photo uploding start
$uploaded_photo =$_FILES['partners_photo'];
$after_exlode = explode('.',$uploaded_photo['name']);
$new_photo_name = rand().time().".". end($after_exlode);
$uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
$new_location = '../img/news/'. $new_photo_name; 
move_uploaded_file($uploaded_photo_temporary_location,$new_location);
//photo uploding end

date_default_timezone_set('Asia/Dhaka');
$current_date_time = date('Y-m-d H:i:s');

// $Insert_photo = "INSERT INTO news(news_name, news_photo, news_discription, created_date) VALUES ('$news_name','$new_photo_name','$news_discription','$current_date_time') ";
// $a = mysqli_query(connect_to_db(), $Insert_photo);
// if (isset($a)) {
//     header('location: latest_news.php');
// } else {
//     echo 'Somthing went wrong!';
// }

// $Insert_result = panda_insert("news_1", "news_name, news_discription, new_photo_name, created_date", "'$news_name', '$news_discription', '$new_photo_name', '$current_date_time'");

// if ($Insert_result) {
//     header('location: experience.php');
// } else {
//     echo 'Somthing went wrong!';
// }

$Insert_result_news = panda_insert("partners", "partners_photos", "'$new_photo_name'");
print_r($Insert_result_news);
if ($Insert_result_news) {
    header('location: partners.php');
} else {
    echo 'Somthing went wrong!';
}
