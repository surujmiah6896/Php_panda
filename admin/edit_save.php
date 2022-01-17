<?php

require_once('db_connection.php');

// echo $id;
// print_r($_POST);
$id = ($_POST["id"]);
$first_name = ucfirst(($_POST["first_name"]));
$last_name = ucfirst(($_POST["last_name"]));
$department = ucfirst(($_POST["department"]));
$semester = ucfirst(($_POST["semester"]));
$phone = ($_POST["phone"]);
$email = ($_POST["email"]);
// $password = ($_POST["password"]);
$gender = ($_POST["gender"]);
$message = ($_POST["message"]);


// require_once('bd_connection.php');
// $id = $_GET['id'];
// echo $id;

// $student_info = mysqli_fetch_assoc($students_information);

// $first_name = $student_info['first_name'];
// $last_name = $student_info['last_name'];
// $department = $student_info['department'];
// $semester = $student_info['semester'];
// $phone = $student_info['phone'];
// $email = $student_info['email'];
// $gender = $student_info['gender'];
// $message = $student_info['message'];
$update_query =
    "UPDATE registration_form 
    SET 
    first_name = '$first_name',
    last_name = '$last_name',
    department = '$department',
    semester = '$semester',
    phone = '$phone',
    email = '$email',
    gender = '$gender',
    message = '$message'
    WHERE id = '$id'";

$update_info = mysqli_query(connect_to_db(), $update_query);
if (isset($update_query)) {
    echo "Update Data";
    header("location: student_info_view.php");
} else {
    echo "Do not Update Data";
}


?>




























<!-- <?php
        // Include database connection file
        // require_once "connection.php";
        // if (count($_POST) > 0) {
        mysqli_query($conn, "UPDATE users set  name='" . $_POST['name'] . "', mobile='" . $_POST['mobile'] . "' ,email='" . $_POST['email'] . "' WHERE id='" . $_POST['id'] . "'");
        $message = "Record Modified Successfully";
        // }
        // $result = mysqli_query($conn, "SELECT * FROM users WHERE id='" . $_GET['userid'] . "'");
        // $row = mysqli_fetch_array($result);
        // 
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $row["name"]; ?>">
                        </div>
                        <div class="form-group ">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $row["email"]; ?>">
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="mobile" name="mobile" class="form-control" value="<?php echo $row["mobile"]; ?>">
                        </div>
                        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="users.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html> -->