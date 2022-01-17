<?php
require_once('db_connection.php');
foreach ($_POST as $setup_name => $setup_value){
  $update_query = "UPDATE setups SET setup_value = '$setup_value' WHERE setup_name = '$setup_name'";
   mysqli_query(connect_to_db(),$update_query);
   
}
header("location: setup.php");
?>