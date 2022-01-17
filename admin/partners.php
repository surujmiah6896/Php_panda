<?php
$partners = true;
require_once 'inc/header.php';
require_once 'db_connection.php';
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Partners</a>
        <span class="breadcrumb-item active">Form Layouts</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Partners</h5>

        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Add Partners</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
            <form action="partners_post.php" method="POST" enctype="multipart/form-data">
                <div class="form-layout">
                    <div class="row mg-b-25">
                    
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Partners Photo: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="file" name="partners_photo">
                            </div>
                        </div><!-- col-6 -->

                

                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5">Add Partners</button>

                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
            <hr>
            <h6 class="card-body-title">List Partners</h6>
            <table class="table">
                <thead>
                    <tr>
                        
                        <th>New Photo</th>
                    
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $partners_Select_query = panda_all('partners')
                    ?>
                    <?php foreach ($partners_Select_query as $single_partners) : ?>
                        <tr>
                            <td><?= $single_partners['partners_photos'] ?></td>
                            <td>

                                <a href="experience_edit.php?id=<?= $single_partners['id'] ?>" class="btn btn-sm btn-info"><i class="fa fa-pencil"> </i> Edit</a>
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