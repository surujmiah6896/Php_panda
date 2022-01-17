<?php
$featured_project = true;
require_once 'inc/header.php';
require_once 'db_connection.php';
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Featured Project</a>
        <span class="breadcrumb-item active">Form Layouts</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Featured Project</h5>

        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Add Featured Project</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
            <form action="featured_project_post.php" method="POST" enctype="multipart/form-data">
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Project Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="projects_name" placeholder="Enter your News Name">
                            </div>
                        </div><!-- col-6 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Project Photo: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="file" name="projects_photo">
                            </div>
                        </div><!-- col-6 -->

                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Project Discription: <span class="tx-danger">*</span></label>
                                <textarea class="form-control" name="projects_discription" rows="5"></textarea>
                            </div>
                        </div><!-- col-12 -->

                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5">Add Project</button>

                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
            <hr>
            <h6 class="card-body-title">List Featured Project</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th>Project Name</th>
                        <th>Project Discription</th>
                        <th>Project Photo</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $project_Select_query = "SELECT * FROM projects";
                    $project_from_db = mysqli_query(connect_to_db(), $project_Select_query);
                    ?>
                    <?php foreach ($project_from_db as $single_project) : ?>
                        <tr>
                            <td><?= $single_project['projects_name'] ?></td>
                            <td><?= $single_project['projects_discription'] ?></td>
                            <td><img src="../img/news/<?= $single_project['projects_photo'] ?>"alt="not found" height="80px"></td>
                            <td><?= $single_project['created_date'] ?></td>
                            <td>

                                <a href="project_delete.php?id=<?= $single_project['id'] ?>" class="btn btn-sm btn-info"><i class="fa fa-pencil"> </i> Delete</a>
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