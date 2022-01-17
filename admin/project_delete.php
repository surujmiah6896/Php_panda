<?php
require_once 'db_connection.php';
panda_delete_with_Project_photo("projects","id", $_GET['id'], "projects_photo");
header('location: featured_project.php');

?>