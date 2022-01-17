<?php

require_once('db_connection.php');
$id = $_GET['id'];


$select_query = "DELETE FROM registration_form WHERE id= $id ";


// $data_count_query = "SELECT COUNT(*) FROM registration_form  ";
// $data_query_civil = "SELECT COUNT(*) FROM student_info WHERE Department='Computer' ";



//run query
$students_info_delete = mysqli_query(connect_to_db(), $select_query);
    if(isset($students_info_delete)){
        header("location: student_info_view.php");
    }else{
        echo'do not delete your data';
    }

// $dataCount = mysqli_query($bd_con, $data_count_query);

?>