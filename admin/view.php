<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Document</title>
</head>

<body>

    <?php
    require_once('db_connection.php');
    $id = $_GET['id'];


    $select_query = "SELECT * FROM registration_form WHERE id= $id ";
    $Status_query = "UPDATE registration_form SET status = 'read' WHERE id = $id";


    // $data_count_query = "SELECT COUNT(*) FROM registration_form  ";
    // $data_query_civil = "SELECT COUNT(*) FROM student_info WHERE Department='Computer' ";



    //run query
    $students_information = mysqli_query(connect_to_db(), $select_query);
    $students_Status = mysqli_query(connect_to_db(), $Status_query);
    $student_info = mysqli_fetch_assoc($students_information);
    // $dataCount = mysqli_query($bd_con, $data_count_query);

    // $count = $dataCount->fetch_array()[0] ?? '';







    // foreach ($students_information as $student_info) {
    //     print_r($student_info['first_name']);
    //     echo '</br>';
    //     print_r($student_info['last_name']);
    //     echo '</br>';
    //     print_r($student_info['department']);
    //     echo '</br>';
    //     print_r($student_info['semester']);
    //     echo '</br>';
    //     print_r($student_info['phone']);
    //     echo '</br>';
    //     print_r($student_info['email']);
    //     echo '</br>';
    // }
    ?>

    <br>
    <br>
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="card text-left">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-header text-white bg-success">
                        <h4 class="card-title"> Details Information </h4>
                        <p class="card-text"><?= $student_info['first_name'] . " " . $student_info['last_name'] ?></p>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered ">
                            <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>ID</th>
                                    <!-- <th>Full Name</th> -->
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Depertment</th>
                                    <th>Semester</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Message</th>
                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $sl = 1;
                                // $n = 0;
                                foreach ($students_information as $student_info) : ?>
                                    <tr>
                                        <td><?= $sl++ ?></td>
                                        <td><?= $student_info['id'] ?></td>
                                        <td><?= $student_info['first_name'] ?></td>
                                        <td><?= $student_info['last_name'] ?></td>

                                        <td><?= $student_info['department'] ?></td>
                                        <td><?= $student_info['semester'] ?></td>
                                        <td><?= $student_info['phone'] ?></td>
                                        <td><?= $student_info['email'] ?></td>
                                        <td><?= $student_info['gender'] ?></td>
                                        <td><?= $student_info['message'] ?></td>
                                        <!-- <td><a href="view.php?id=<?= $student_info['id'] ?>" class="btn btn-success">View</a>
                                            <a href="" class="btn btn-primary">Edit</a>
                                            <a href="" class="btn btn-danger">Delete</a>

                                        </td> -->



                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row m-3">
                        <div class="col-3">
                            <a href="student_info_view.php" class="btn btn-success">Back</a>
                            <!-- <a href="student_form.php" class="btn btn-secondary">Insert</a> -->
                        </div>
                        <div class="col-1">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script src="js/bootstrap.min.js"></script>


</body>

</html>