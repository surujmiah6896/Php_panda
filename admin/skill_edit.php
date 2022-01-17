<?php
$skill = true;
require_once 'inc/header.php';
require_once 'db_connection.php';
$id = $_GET['id'];
$select_query = "SELECT * FROM skills WHERE id= $id ";
$skill_information = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $select_query));
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Edit Skill</a>
        <span class="breadcrumb-item active">Form Layouts</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Edit Skill</h5>

        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Edit Skill</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
            <form action="skill_edit_post.php" method="POST">
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Skill Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="skill_name" value="<?= $skill_information['skill_name'] ?>">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Percentage (out of 100): <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="percentage" value="<?= $skill_information['percentage'] ?>">
                            </div>
                        </div><!-- col-4 -->


                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <input type="hidden" name="id" value="<?= $skill_information["id"] ?>">
                        <a href="skill_edit_post.php" class="btn btn-info mg-r-5">Submit</a>

                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
            <hr>

        </div><!-- card -->





    </div><!-- sl-pagebody -->
    <?php
    require_once 'inc/footer.php';
    ?>