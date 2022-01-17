<?php

function connect_to_db(){
    $host_name = 'localhost';
    $user_name = 'root';
    $password = '';
    $db_name = 'panda';
   return $bd_con = mysqli_connect($host_name, $user_name, $password, $db_name);

}
function panda_all($table_name){
$select_query = "SELECT * FROM $table_name ";
return $result_from_db = mysqli_query(connect_to_db(),$select_query);
}
function panda_insert($table_name, $field_name, $field_value){
    $insert_query = "INSERT INTO $table_name($field_name) VALUES ($field_value)";
   return mysqli_query(connect_to_db(),$insert_query);
}

function panda_delete_with_photo($table_name, $field_name, $field_value, $photo_field_name){
    $select_query = "SELECT * FROM $table_name WHERE $field_name = $field_value ";
    $result_from_db = mysqli_query(connect_to_db(),$select_query);
    $photo_name = mysqli_fetch_assoc($result_from_db)[$photo_field_name];
    // print_r($photo_name);
    $link = $_SERVER['DOCUMENT_ROOT']."/img/".$table_name."/".$photo_name;
// echo $link;
    unlink($link);
    $delete_query = "DELETE FROM $table_name WHERE $field_name = $field_value";
    return mysqli_query(connect_to_db(),$delete_query);

    
}

function panda_delete_with_Project_photo($table_name, $field_name, $field_value, $photo_field_name)
{
    $select_query = "SELECT * FROM $table_name WHERE $field_name = $field_value ";
    $result_from_db = mysqli_query(connect_to_db(), $select_query);
    $photo_name = mysqli_fetch_assoc($result_from_db)[$photo_field_name];
    // print_r($photo_name);
    $link = $_SERVER['DOCUMENT_ROOT'] . "/img/news/" . $photo_name;
    // echo $link;
    unlink($link);
    $delete_query = "DELETE FROM $table_name WHERE $field_name = $field_value";
    return mysqli_query(connect_to_db(), $delete_query);
}
function panda_setup($table_name, $setup_name){
    $setup_query = "SELECT setup_value FROM $table_name WHERE setup_name = '$setup_name' ";
    return mysqli_fetch_assoc(mysqli_query(connect_to_db(), $setup_query))['setup_value'];
}