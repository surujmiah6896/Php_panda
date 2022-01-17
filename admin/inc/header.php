<?php
session_start();

if (!isset($_SESSION['login_Status'])) {
    header('location: notallowed.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>my admin</title>

    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="lib/rickshaw/rickshaw.min.css" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="css/starlight.css">
</head>

<body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> starlight</a></div>
    <div class="sl-sideleft">
        <div class="input-group input-group-search">
            <input type="search" name="search" class="form-control" placeholder="Search">
            <span class="input-group-btn">
                <button class="btn"><i class="fa fa-search"></i></button>
            </span><!-- input-group-btn -->
        </div><!-- input-group -->

        <label class="sidebar-label">Navigation</label>
        <div class="sl-sideleft-menu">
            <a href="dashboard.php" class="sl-menu-link <?= isset($dashboard) ? 'active' : '' ?> ">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Dashboard</span>
                </div><!-- menu-item -->

            </a><!-- sl-menu-link -->
            <a href="experience.php" class="sl-menu-link <?= isset($experience) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-briefcase tx-20"></i>
                    <span class="menu-item-label">Experience</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <a href="skill.php" class="sl-menu-link <?= isset($skill) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-settings tx-20"></i>
                    <span class="menu-item-label">Skill</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->

            <a href="testimonials.php" class="sl-menu-link <?= isset($testimonials) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-pie tx-20"></i>
                    <span class="menu-item-label">Testimonials</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->

            <a href="latest_news.php" class="sl-menu-link <?= isset($latest_news) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon ion-ios-information tx-20"></i>
                    <span class="menu-item-label">Latest News</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->

            <a href="partners.php" class="sl-menu-link <?= isset($partners) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                    <span class="menu-item-label">Partners</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->

            <a href="services.php" class="sl-menu-link <?= isset($services) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon ion-ios-pricetags tx-20"></i>
                    <span class="menu-item-label">Services</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->

            <a href="featured_project.php" class="sl-menu-link <?= isset($featured_project) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                    <span class="menu-item-label">Featured projects</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <a href="setup.php" class="sl-menu-link <?= isset($setup) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                    <span class="menu-item-label">Setup</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->




        </div><!-- sl-sideleft-menu -->

        <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
        <div class="sl-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        </div><!-- sl-header-left -->
        <div class="sl-header-right">
            <nav class="nav">
                <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name icon ion-ios-person-outline"> <?= isset($_SESSION['login_name']) ?  $_SESSION['login_name'] : 'Hi' ?></span>
                        <img src="../img/img3.jpg" class="wd-32 rounded-circle" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            <li><a href="edit_profile.php"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                            <li><a href="../my_index.php"><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                            <li><a href="log_out.php"><i class="icon ion-power"></i> Sign Out</a></li>
                        </ul>
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
            </nav>

        </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->