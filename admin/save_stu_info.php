<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <?php

    require_once('db_connection.php');
    
    $first_name = ucfirst(($_POST["first_name"]));
    $last_name = ucfirst(($_POST["last_name"]));
    $department = ucfirst(($_POST["department"]));
    $semester = ucfirst(($_POST["semester"]));
    $phone = ($_POST["phone"]);
    $email = ($_POST["email"]);
    // $password = ($_POST["password"]);
    $gender = ucfirst(($_POST["gender"]));
    $message = ucfirst(($_POST["message"]));



    if ($first_name && $department && $semester && $phone && $email) {

        if (strlen($phone) == 11) {

            $insart_data = "INSERT INTO registration_form (first_name, last_name, department, semester, phone, email,gender,message) 
        VALUES ('$first_name','$last_name','$department','$semester','$phone','$email','$gender','$message')";

            $insert_query = mysqli_query(connect_to_db(), $insart_data);
            if (isset($insert_query)) {
                header("location: student_info_view.php");
                echo 'Save your Data';
            }
        } else {
            echo '<br>';
            echo '<br>';
            echo 'Please Enter your 11 Digit Phone Number';
        }
    } else {
        echo '<br>';
        echo '<br>';
        echo "Don't Save your Data!";
    }

    ?>
    


</body>

</html>