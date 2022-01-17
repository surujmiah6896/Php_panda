<?php
$skill = true;
require_once 'inc/header.php';
require_once 'db_connection.php';
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Skill</a>
        <span class="breadcrumb-item active">Form Layouts</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Skill</h5>

        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Add Skill</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
            <form action="skill_post.php" method="POST">
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Skill Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="skill_name" placeholder="Enter your Skill Name">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Percentage (out of 100): <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="percentage" placeholder="Ex:1-100">
                            </div>
                        </div><!-- col-4 -->


                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5">Add Skill</button>

                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
            <hr>
            <h6 class="card-body-title">List Skills</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th>Skill Name</th>
                        <th>Percentage</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // $experiecnce_Select_query = "SELECT * FROM experiences";
                    // $experience_from_db = mysqli_query(connect_to_db(), $experiecnce_Select_query);
                    $skill_from_db = panda_all('skills');
                    ?>
                    <?php foreach ($skill_from_db as $single_skill) : ?>
                        <tr>
                            <td><?= $single_skill['skill_name'] ?></td>
                            <td><?= $single_skill['percentage'] ?></td>
                            <td>
                            
                                <a href="skill_edit.php?id=<?= $single_skill['id'] ?>" class="btn btn-sm btn-info"><i class="fa fa-pencil"> </i> Edit</a>
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