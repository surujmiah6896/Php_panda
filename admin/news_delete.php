<?php
require_once 'db_connection.php';
panda_delete_with_photo("news","id", $_GET['id'], "news_photo");
header('location: latest_news.php');

?>