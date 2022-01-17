<?php
$experience = true;
require_once 'inc/header.php';
require_once 'db_connection.php';
$id = $_GET['id'];
$select_query = "SELECT * FROM experiences WHERE id= $id ";
$experience_information = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $select_query));

?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Edit Experience</a>
        <span class="breadcrumb-item active">Form Layouts</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Edit Experience</h5>

        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Edit Experience</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
            <form action="edit_experience_post.php" method="POST">
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Company Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="company_name" value="<?= $experience_information['company_name'] ?>">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Duration: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="duration" value="<?= $experience_information['duration'] ?>">
                            </div>
                        </div><!-- col-4 -->
                        <div class=" col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Designation: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="designation" value="<?= $experience_information['designation'] ?>">
                            </div>
                        </div><!-- col-4 -->
                        <div class=" col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Discription: <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control" name="discription" value="<?= $experience_information['discription'] ?>" rows=" 5"></input>
                            </div>
                        </div><!-- col-12 -->

                    </div><!-- row -->
            </form>
            <div class="form-layout-footer">
                <input type="hidden" name="id" value="<?= $experience_information["id"] ?>">
                <button type="submit" class="btn btn-info mg-r-5">Submit</button>

            </div><!-- form-layout-footer -->
        </div><!-- form-layout -->

        <hr>

    </div><!-- card -->





</div><!-- sl-pagebody -->
<?php
require_once 'inc/footer.php';
?>