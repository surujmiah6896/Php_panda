<?php

require_once('db_connection.php');
// $id = $_GET['id'];

// if (isset($_POST["btnDelete"])) {
//     $all_delete_query = "DELETE FROM registration_form WHERE id= 3";
//     $query = mysqli_query($bd_con, $all_delete_query);
//     // header("location: student_info_view.php");
//     header("location: student_info_view.php");
// } else if (isset($_POST["btnAllUnread"])) {
    $all_Unread_query = "UPDATE registration_form SET  status= 'Unread' ";
    $unread_query = mysqli_query(connect_to_db(), $all_Unread_query);
    header("location: student_info_view.php");
// }

// echo "Hello Word";

?>