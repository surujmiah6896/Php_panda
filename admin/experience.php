<?php
$experience = true;
require_once 'inc/header.php';
require_once 'db_connection.php';
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Experience</a>
        <span class="breadcrumb-item active">Form Layouts</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Experience</h5>

        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Add Experience</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
            <form action="experience_post.php" method="POST">
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Company Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="company_name" placeholder="Enter your Company Name">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Duration: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="duration" placeholder="Ex:2011-2014">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Designation: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="designation" placeholder="Enter Your Designation">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Discription: <span class="tx-danger">*</span></label>
                                <textarea class="form-control" name="discription" rows="5"></textarea>
                            </div>
                        </div><!-- col-12 -->

                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5">Add Experience</button>

                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
            <hr>
            <h6 class="card-body-title">List Experiences</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th>Company Name</th>
                        <th>Duration</th>
                        <th>Designation</th>
                        <th>Discription</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $experiecnce_Select_query = "SELECT * FROM experiences";
                    $experience_from_db = mysqli_query(connect_to_db(), $experiecnce_Select_query);
                    ?>
                    <?php foreach ($experience_from_db as $single_experience) : ?>
                        <tr>
                            <td><?= $single_experience['company_name'] ?></td>
                            <td><?= $single_experience['duration'] ?></td>
                            <td><?= $single_experience['designation'] ?></td>
                            <td><?= $single_experience['discription'] ?></td>
                            <td>

                                <a href="experience_edit.php?id=<?= $single_experience['id'] ?>" class="btn btn-sm btn-info"><i class="fa fa-pencil"> </i> Edit</a>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div><!-- card -->





    </div><!-- sl-pagebody -->
    <?php
    require_once 'inc/footer.php';
    ?>