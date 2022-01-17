<?php
session_start();
require_once 'inc/header.php';
require_once 'db_connection.php';


?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Forms</a>
        <span class="breadcrumb-item active">Form Layouts</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Form Layouts</h5>
            <p>Forms are used to collect user information with different element types of input, select, checkboxes, radios and more.</p>
        </div><!-- sl-page-title -->


        <div class="row row-sm mg-t-20">
            <div class="col-xl-12">
                <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                    <h6 class="card-body-title">Left Label Alignment</h6>
                    <p class="mg-b-20 mg-sm-b-30">A basic form where labels are aligned in left.</p>
                    <?php
                    
                    $name = $_SESSION['login_name'];

                    $select_query = "SELECT * FROM registration_form WHERE first_name= '$name' ";
                    $g = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $select_query));
                    


                    ?>


                    <div class="row">
                        <label class="col-sm-4 form-control-label">Firstname: <span class="tx-danger">*</span></label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <input type="text" class="form-control" name="first_name" value="<?= $_SESSION['login_name'] ?>">
                        </div>
                    </div><!-- row -->
                    <div class="row mg-t-20">
                        <label class="col-sm-4 form-control-label">Email: <span class="tx-danger">*</span></label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <input type="text" class="form-control" name="email" value="<?= $g['email'] ?>">
                        </div>
                    </div><!-- row -->
                    <div class="row mg-t-20">
                        <label class="col-sm-4 form-control-label">Account Open Time: <span class="tx-danger">*</span></label>
                        <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                            <input type="text" class="form-control" name="created_day" value="">
                        </div>
                    </div>


                    <div class="form-layout-footer mg-t-30">
                        <button class="btn btn-info mg-r-5">Submit</button>
                        <button class="btn btn-secondary">Cancel</button>
                    </div><!-- form-layout-footer -->
                </div><!-- card -->
            </div><!-- col-6 -->

        </div><!-- row -->

        <div class="card pd-20 pd-sm-40 mg-t-20">
            <h6 class="card-body-title">Form Alignment</h6>
            <p class="mg-b-20 mg-sm-b-30">An inline form that is centered align and right aligned.</p>

            <div class="d-flex align-items-center justify-content-center bg-gray-100 ht-md-80 bd pd-x-20">
                <div class="d-md-flex pd-y-20 pd-md-y-0">
                    <input type="text" class="form-control" placeholder="Email address">
                    <input type="password" class="form-control mg-md-l-10 mg-t-10 mg-md-t-0" placeholder="Password">
                    <button class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0">Sign In</button>
                </div>
            </div><!-- d-flex -->

            <div class="d-flex align-items-center justify-content-end bg-gray-100 ht-md-80 bd pd-x-20 mg-t-10">
                <div class="d-md-flex pd-y-20 pd-md-y-0">
                    <input type="text" class="form-control" placeholder="Email address">
                    <input type="password" class="form-control mg-md-l-10 mg-t-10 mg-md-t-0" placeholder="Password">
                    <button class="btn btn-info pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0">Sign In</button>
                </div>
            </div><!-- d-flex -->
        </div><!-- card -->

    </div><!-- sl-pagebody -->
    <footer class="sl-footer">
        <?php
        require_once 'inc/footer.php';
        ?>