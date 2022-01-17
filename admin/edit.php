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
    $id = $_GET['id'];
    // echo $id;


    $select_query = "SELECT * FROM registration_form WHERE id= $id ";


    // $data_count_query = "SELECT COUNT(*) FROM registration_form  ";
    // $data_query_civil = "SELECT COUNT(*) FROM student_info WHERE Department='Computer' ";



    //run query
    $students_information = mysqli_query(connect_to_db(), $select_query);

    $student_info = mysqli_fetch_assoc($students_information);


    ?>

    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div>
                    <a href="#">Home</a> || <a href="#">View</a>
                </div>
                <div class="card">
                    <img class="card-img-top" alt="">
                    <div class="card-header bg-success text-light">
                        <h2 class="card-title">Student Infomation Input Table</h2>
                        <!-- <p class="card-text">Text</p> -->
                    </div>
                    <div class="card-body">

                        <form action="edit_save.php" method="POST">

                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" name="first_name" value="<?= $student_info['first_name'] ?>" placeholder=" Enter your First Name">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="last_name" value="<?= $student_info['last_name'] ?>" placeholder="Enter your Last Name">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Department</label>
                                <!-- <input type="text" class="form-control" name="department" placeholder="Enter your Department"> -->
                                <select id="cars" name="department" class="form-control">
                                    <option value="computer">Computer</option>
                                    <option value="civil">Civil</option>
                                    <option value="textile">Textile</option>
                                    <option value="telecom">Telecom</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Semester</label>
                                <!-- <input type="text" class="form-control" name="semester" placeholder="Enter your Semester"> -->
                                <select id="cars" name="semester" class="form-control">
                                    <option value="5th">5th</option>
                                    <option value="6th">6th</option>
                                    <option value="7th">7th</option>
                                    <option value="8th">8th</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control" name="phone" value="<?= $student_info['phone'] ?>" placeholder="Enter your Phone">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" value="<?= $student_info['email'] ?>" placeholder="Enter your Email">
                                <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <!-- <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter your Password">
                            </div> -->

                            <div class="mb-3 form-check">
                                <input type="radio" class="form-check-input" name="gender" value="male" <?= ($student_info['gender'] == 'Male') ? 'checked' : '' ?>>
                                <label class="form-check-label">Male</label>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="radio" class="form-check-input" name="gender" value="female" <?= ($student_info['gender'] == 'Female') ? 'checked' : '' ?>>
                                <label class="form-check-label">Female</label>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="radio" class="form-check-input" name="gender" value="other" <?= ($student_info['gender'] == 'Other') ? 'checked' : '' ?>>
                                <label class="form-check-label">Other</label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <input type="text" class="form-control" name="message" value="<?= $student_info['message'] ?>" placeholder="Enter your Last Name">
                            </div>



                            <input type="hidden" name="id" value="<?= $student_info["id"] ?>">
                            <input type="submit" class="btn btn-primary" value="Submit">
                            <a href="student_info_view.php" class="btn btn-info">View</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="js/bootstrap.min.js"></script>


</body>

</html>