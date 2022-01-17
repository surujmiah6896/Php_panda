<?php
$testimonials = true;
require_once 'inc/header.php';
require_once 'db_connection.php';
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Testimonials</a>
        <span class="breadcrumb-item active">Form Layouts</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Testimonials</h5>

        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Add Testimonials</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
            <form action="testimonials_post.php" method="POST">
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label"> Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="name" placeholder="Enter Name">
                            </div>
                        </div><!-- col-6 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Designation: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="designation">
                            </div>
                        </div><!-- col-6 -->

                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Testimonials Discription: <span class="tx-danger">*</span></label>
                                <textarea class="form-control" name="testi_discription" rows="5"></textarea>
                            </div>
                        </div><!-- col-12 -->

                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5">Add Testimonials</button>

                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
            <hr>
            <h6 class="card-body-title">List Testimonials</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Testimonial Discription</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $testimonials_Select_query = "SELECT * FROM testimonials";
                    $testimonials_from_db = mysqli_query(connect_to_db(), $testimonials_Select_query);
                    ?>
                    <?php foreach ($testimonials_from_db as $single_testimonial) : ?>
                        <tr>
                            <td><?= $single_testimonial['name'] ?></td>
                            <td><?= $single_testimonial['designation'] ?></td>
                            <td><?= $single_testimonial['testi_discription'] ?></td>
                            <td>

                                <a href="testimonials.php?id=<?= $single_testimonial['id'] ?>" class="btn btn-sm btn-info"><i class="fa fa-pencil"> </i> Edit</a>
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