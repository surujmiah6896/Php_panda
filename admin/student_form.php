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
    
    ?>

    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div>
                    <a href="#">Home</a> || <a href="#">View</a>
                </div>
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/" alt="">
                    <div class="card-header bg-success text-light">
                        <h2 class="card-title">Student Information Input Table </h2>
                        <!-- <p class="card-text">Text</p> -->
                    </div>
                    <div class="card-body">

                        <form method="POST" action="save_stu_info.php">
                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" name="first_name" placeholder="Enter your First Name">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="last_name" placeholder="Enter your Last Name">
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
                                <input type="number" class="form-control" name="phone" placeholder="Enter your Phone">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter your Email">
                                <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <!-- <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter your Password">
                            </div> -->

                            <div class="mb-3 form-check">
                                <input type="radio" class="form-check-input" name="gender" value="male">
                                <label class="form-check-label">Male</label>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="radio" class="form-check-input" name="gender" value="female">
                                <label class="form-check-label">Female</label>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="radio" class="form-check-input" name="gender" value="other">
                                <label class="form-check-label">Other</label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea type="text" class="form-control" rows="4" name="message" placeholder="Enter your Message"></textarea>
                            </div>



                            <button type="submit" class="btn btn-primary">Submit</button>
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