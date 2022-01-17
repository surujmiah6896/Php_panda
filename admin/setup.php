<?php
$setup = true;
require_once 'inc/header.php';
require_once 'db_connection.php';
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Setup</a>
        <span class="breadcrumb-item active">Form Layouts</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Setup</h5>

        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Add Setup</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
            <form action="setup_edit.php" method="POST">
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">

                                <label class="form-control-label">Author Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="author_name" value="<?= panda_setup('setups', 'author_name') ?>" placeholder="Enter your Author Name">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">About Me: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="about_me" value="<?= panda_setup('setups', 'about_me') ?>" placeholder="Enter About me">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="email" value="<?= panda_setup('setups', 'email') ?>" placeholder="Enter your Email">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Phone Number: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="phone" value="<?= panda_setup('setups', 'phone') ?>" placeholder="Enter your Phone">
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Years of Experience: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="years_of_experience" value="<?= panda_setup('setups', 'years_of_experience') ?>" placeholder="Enter your Phone">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Primary Background Color: <span class="tx-danger">*</span></label>
                                <input class="" type="color" name="primary_bg_color" value="<?= panda_setup('setups', 'primary_bg_color') ?>" placeholder="Enter your Phone">
                            </div>
                        </div><!-- col-4 -->




                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5">Add Setup</button>

                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
        
            
        </div><!-- card -->





    </div><!-- sl-pagebody -->
    <?php
    require_once 'inc/footer.php';
    ?>