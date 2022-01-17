<?php
$latest_news = true;
require_once 'inc/header.php';
require_once 'db_connection.php';
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Latest New</a>
        <span class="breadcrumb-item active">Form Layouts</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Latest New</h5>

        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Add Latest New</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
            <form action="latest_new_post.php" method="POST" enctype="multipart/form-data">
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">News Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="news_name" placeholder="Enter your News Name">
                            </div>
                        </div><!-- col-6 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">News Photo: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="file" name="news_photo">
                            </div>
                        </div><!-- col-6 -->

                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">News Discription: <span class="tx-danger">*</span></label>
                                <textarea class="form-control" name="news_discription" rows="5"></textarea>
                            </div>
                        </div><!-- col-12 -->

                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5">Add News</button>

                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
            <hr>
            <h6 class="card-body-title">List News</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th>News Name</th>
                        <th>New Duration</th>
                        <th>New Photo</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $news_Select_query = "SELECT * FROM news";
                    $news_from_db = mysqli_query(connect_to_db(), $news_Select_query);
                    ?>
                    <?php foreach ($news_from_db as $single_new) : ?>
                        <tr>
                            <td><?= $single_new['news_name'] ?></td>
                            <td><?= $single_new['news_discription'] ?></td>
                            <td><img src="../img/news/<?= $single_new['news_photo'] ?>" alt="not found" height="80px"></td>
                            <td><?= $single_new['created_date'] ?></td>
                            <td>

                                <a href="news_delete.php?id=<?= $single_new['id'] ?>" class="btn btn-sm btn-info"><i class="fa fa-pencil"> </i> Delete</a>
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