<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <title>Document</title>
</head>

<body>

    <?php
    require_once('db_connection.php');

    // echo $con_result;
    $select_query = "SELECT * FROM registration_form";
    // $com_depertment_query = "SELECT * FROM student_info WHERE Department='Computer'";
    // $civil_depertment_query = "SELECT * FROM student_info WHERE Department='Civil'";
    // $other_depertment_query = "SELECT * FROM student_info WHERE Semester='7th'";

    $data_count_query = "SELECT COUNT(*) FROM registration_form  ";
    $read_data_count_query = "SELECT COUNT(*) AS total_read FROM registration_form WHERE status = 'read' ";
    $unread_data_count_query = "SELECT COUNT(*) AS total_unread FROM registration_form WHERE status = 'unread' ";
    // $data_query_civil = "SELECT COUNT(*) FROM student_info WHERE Department='Computer' ";

    //run query
    $students_information = mysqli_query(connect_to_db(), $select_query);
    // $students_information_with_dep = mysqli_query($db_connect, $com_depertment_query);
    // $students_info_civil = mysqli_query($db_connect, $civil_depertment_query);
    // $students_info_textail = mysqli_query($db_connect, $other_depertment_query);
    $dataCount = mysqli_query(connect_to_db(), $data_count_query);
    $readDataCount = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $read_data_count_query))['total_read'];
    $unreadDataCount = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $unread_data_count_query))['total_unread'];

    // $read_Count= mysqli_fetch_assoc($readDataCount);
    // $dataCount_civil = mysqli_query($db_connect, $data_query_civil);
    //echo $r = mysql_result($dataCount, 0);
    //echo $dataCount;
    // $row = mysqli_fetch_array($dataCount);
    $count = $dataCount->fetch_array()[0] ?? '';
    // $count_2 = mysqli_num_rows($students_information);
    // $count_civil = $dataCount_civil->fetch_array()[0];


    // while ($row = $dataCount->fetch_assoc()) {

    //     echo $row . "<br>";
    // }




    //   foreach($students_information as $student_info){
    //      print_r($student_info['first_name']);
    //     echo '</br>';
    //      print_r($student_info['last_name']);
    //     echo '</br>';
    //      print_r($student_info['department']);
    //     echo '</br>';
    //      print_r($student_info['semester']);
    //     echo '</br>';
    //      print_r($student_info['phone']);
    //     echo '</br>';
    //      print_r($student_info['email']);
    //      echo '</br>';

    //  }




    ?>
    <br>
    <br>
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="card text-left">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-header text-white bg-success">
                        <div class="col">
                            <h3 class="card-text">All Student Information( Total Student: <?= $count ?>, Unread: <?= $unreadDataCount ?>, Read: <?= $readDataCount ?> ) </h3>

                            <!-- <input class="btn-danger" type="submit" id="btnDelete" name="btnDelete" value="All Delete" />
                            <input class="btn-primary" type="submit" id="btnAllUnread" name="btnAllUnread" value="All Unread" /> -->

                            <a href="all_delete.php" class="btn btn-danger">All Delete</a>
                            <a href="all_unread.php" class="btn btn-primary">All Unread</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="registration_form_id" class="table table-bordered table-striped ">
                            <thead>
                                <tr>
                                    <th>Serial</th>
                                    <!-- <th>ID</th> -->
                                    <th>Full Name</th>
                                    <!-- <th>First Name</th> -->
                                    <!-- <th>Last Name</th> -->
                                    <!-- <th>Depertment</th> -->
                                    <!-- <th>Semester</th> -->
                                    <!-- <th>Phone</th> -->
                                    <th>Email</th>
                                    <th>Status</th>
                                    <!-- <th>Gender</th> -->
                                    <!-- <th>Message</th> -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $sl = 1;
                                foreach ($students_information as $student_info) : ?>
                                    <tr class="<?= ($student_info['status'] == 'Unread') ? 'bg-dark text-white' : '' ?>">
                                        <td><?= $sl++ ?></td>
                                        <!-- <td><?= $student_info['id'] ?></td> -->
                                        <td><?= $student_info['first_name'] . " " . $student_info['last_name'] ?></td>

                                        <!-- <td><?= $student_info['department'] ?></td> -->
                                        <!-- <td><?= $student_info['semester'] ?></td> -->
                                        <!-- <td><?= $student_info['phone'] ?></td> -->
                                        <td><?= $student_info['email'] ?></td>
                                        <!-- <td><?= $student_info['gender'] ?></td> -->
                                        <!-- <td><?= $student_info['message'] ?></td> -->
                                        <td><?= ucfirst($student_info['status'])  ?></td>
                                        <td><a href="view.php?id=<?= $student_info['id'] ?>" class="btn btn-success">View</a>
                                            <a href="edit.php?id=<?= $student_info['id'] ?>" class="btn btn-primary">Edit</a>
                                            <a href="delete.php?id=<?= $student_info['id'] ?>" class="btn btn-danger">Delete</a>

                                        </td>



                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row m-3">
                        <div class="col-6">
                            <a href="index.php" class="btn btn-success">Home</a>
                            <a href="student_form.php" class="btn btn-secondary">Insert</a>

                        </div>
                        <div class="col-6">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#registration_form_id').DataTable();
        });
    </script>

</body>

</html>