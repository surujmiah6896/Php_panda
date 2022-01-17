<?php
require_once 'admin/db_connection.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Richard. - Easy Onepage Personal Template">
  <meta name="author" content="Paul">

  <!-- CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap">
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link href="admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet">

  <title><?= panda_setup('setups', 'author_name') ?>. - Easy Onepage Personal Template</title>
</head>

<body>

  <!-- Loader -->
  <div class="loader">
    <div class="spinner">
      <div class="double-bounce1"></div>
      <div class="double-bounce2"></div>
    </div>
  </div>

  <!-- Click capture -->
  <div class="click-capture d-lg-none"></div>

  <!-- Navbar -->
  <nav id="scrollspy" class="navbar navbar-desctop">

    <div class="d-flex position-relative w-100">

      <!-- Brand-->
      <a class="navbar-brand" href="#"><?= panda_setup('setups', 'author_name') ?>.</a>
      <ul class="navbar-nav-desctop mr-auto d-none d-lg-block">
        <li><a class="nav-link" href="#home">Home</a></li>
        <li><a class="nav-link" href="#about">About</a></li>
        <li><a class="nav-link" href="#experience">Experience</a></li>
        <li><a class="nav-link" href="#projects">Projects</a></li>
        <li><a class="nav-link" href="#testimonials">Testimonials</a></li>
      </ul>

      <!-- Social -->
      <ul class="social-icons mr-auto mr-lg-0 d-none d-sm-block">
        <li><a href="#">
            <ion-icon name="logo-facebook"></ion-icon>
          </a></li>
        <li><a href="#">
            <ion-icon name="logo-twitter"></ion-icon>
          </a></li>
        <li><a href="#">
            <ion-icon name="logo-linkedin"></ion-icon>
          </a></li>
        <li><a href="#">
            <ion-icon name="logo-instagram"></ion-icon>
          </a></li>
      </ul>

      <!-- Toggler -->
      <button class="toggler d-lg-none ml-auto">
        <span class="toggler-icon"></span>
        <span class="toggler-icon"></span>
        <span class="toggler-icon"></span>
      </button>
    </div>
  </nav>


  <!-- Navbar Mobile -->
  <nav id="navbar-mobile" class="navbar navbar-mobile d-lg-none">
    <ion-icon class="close" name="close-outline"></ion-icon>

    <!-- Social -->
    <ul class="social-icons mr-auto mr-lg-0">
      <li><a href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li><a href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li><a href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li><a href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>

    <ul class="navbar-nav navbar-nav-mobile">
      <li><a class="nav-link" href="#home">Home</a></li>
      <li><a class="nav-link" href="#about">About</a></li>
      <li><a class="nav-link" href="#experience">Experience</a></li>
      <li><a class="nav-link" href="#projects">Projects</a></li>
      <li><a class="nav-link" href="#testimonials">Testimonials</a></li>
    </ul>
    <div class="navbar-mobile-footer">
      <p>© <?= date('Y') ?> Richard. All Rights Reserved.</p>
    </div>
  </nav>

  <!-- Masthead -->
  <main id="home" class="masthead jarallax" style="background-image:url('../img/news/<?= $single_new['news_photo'] ?>'); role=" main">
    <div class="opener">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-5">
            <h1>Hey, I am <?= panda_setup('setups', 'author_name') ?>.</h1>
            <p class="lead mt-4 mb-5"><?= panda_setup('setups', 'about_me') ?></p>
            <button type="button" class="btn" data-toggle="modal" data-target="#send-request">Let's talk</button>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- About -->
  <section id="about" class="section">
    <div class="container">
      <h2 data-aos="fade-up">Just trust me.</h2>
      <section class="mt-4">
        <div class="row">
          <div class="col-md-6 col-lg-5 mb-5 mb-md-0" data-aos="fade-up">
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered </p>
            <div class="experience d-flex align-items-center">
              <div class="experience-number text-parallax"><?= panda_setup('setups', 'years_of_experience') ?></div>
              <div class="text-dark mt-3 ml-4">Years<br> of experience</div>
            </div>
          </div>
          <div class="col-md-5 offset-lg-2" data-aos="fade-in" data-aos-delay="50">
            <?php
            $skill_from_db = panda_all('skills');

            ?>
            <?php foreach ($skill_from_db as $single_skill) : ?>
              <h6 class="mt-0"><?= $single_skill['skill_name'] ?></h6>
              <div class="progress mb-5">
                <div class="progress-bar" role="progressbar" data-aos="width" style="width:<?= $single_skill['percentage'] ?>%" aria-valuenow="<?= $single_skill['percentage'] ?>" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            <?php
            endforeach;
            ?>


          </div>
        </div>
      </section>
    </div>
  </section>

  <section class="section " style="background: <?= panda_setup('setups', 'primary_bg_color') ?>;">
    <div class="container">
      <div class="container">
        <div class="row">
          <?php
          $services_from_db = panda_all('services');

          ?>
          <?php foreach ($services_from_db as $service_skill) : ?>
            <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-in">
              <!-- <ion-icon class="text-white" name=""></ion-icon> -->
              <i class="fa <?= $service_skill['service_icon'] ?> text-white fa-5x"></i>
              <h6 class="text-white"><?= $service_skill['service_name'] ?></h6>
              <p><?= $service_skill['service_discription'] ?></p>
            </div>
          <?php
          endforeach;
          ?>

        </div>
      </div>
    </div>
  </section>

  <!-- Experience -->
  <section id="experience" class="section pb-0">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-md-6" data-aos="fade-up">
          <h2 class="mb-3 mb-md-0">Experience</h2>
        </div>
        <div class="col-md-5 offset-md-1 text-md-right">
          <h6 class="my-0 text-gray"><a href="">Download my cv</a></h6>
        </div>
      </div>


      <div class="mt-5 pt-5">
        <?php
        $experiecnce_Select_query = "SELECT * FROM experiences";
        $experience_from_db = mysqli_query(connect_to_db(), $experiecnce_Select_query);
        ?>
        <?php foreach ($experience_from_db as $single_experience) : ?>
          <div class="row-experience row justify-content-between" data-aos="fade-up">
            <div class="col-md-4">
              <div class="h6 my-0 text-gray"><?= $single_experience['duration'] ?></div>
              <h5 class="mt-2 text-primary text-uppercase"><?= $single_experience['company_name'] ?></h5>
            </div>
            <div class="col-md-4">
              <h5 class="mb-3 mt-0 text-uppercase"><?= $single_experience['designation'] ?></h5>
            </div>
            <div class="col-md-4">
              <p><?= $single_experience['discription'] ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Projects -->
  <section id="projects" class="section">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-md-6" data-aos="fade-up">
          <h2 class="mb-3 mb-md-0">Featured projects</h2>
        </div>
        <div class="col-md-5 offset-md-1 text-md-right">
          <h6 class="my-0 text-gray"><a href="#">View all projects</a></h6>
        </div>
      </div>
      <div class="mt-5 pt-5" data-aos="fade-in">
        <div class="carousel-project owl-carousel">
          <?php
          $projects_Select_query = "SELECT * FROM projects";
          $projects_from_db = mysqli_query(connect_to_db(), $projects_Select_query);
          ?>
          <?php foreach ($projects_from_db as $single_project) : ?>

            <div class="project-item">
              <a href="#project<?= $single_project['id'] ?>" class="popup-with-zoom-anim">
                <figure class="position-relative">
                  <img alt="" class="w-100" src="img/news/<?= $single_project['projects_photo'] ?>">
                  <figcaption class="text-white">
                    <h3 class="mb-2 text-white"><?= $single_project['projects_name'] ?></h3>
                    <p><?= $single_project['projects_discription'] ?></p>
                  </figcaption>
                </figure>
              </a>
            </div>

          <?php endforeach; ?>

        </div>
      </div>
    </div>
  </section>

  <!-- Project Modal Dialog 1 -->
  <?php
  $projects_Select_query = "SELECT * FROM projects";
  $projects_from_db = mysqli_query(connect_to_db(), $projects_Select_query);
  ?>
  <?php foreach ($projects_from_db as $single_project) : ?>
    <div id="project<?= $single_project['id'] ?>" class="container mfp-hide zoom-anim-dialog">
      <h2 class="mt-0"><?= $single_project['projects_name'] ?></h2>
      <div class="mt-5 pt-2 text-dark">
        <div class="row">
          <div class="mb-5 col-md-6 col-lg-3">
            <h6 class="my-0">Clients:</h6>
            <span>Ethan Hunt, John Doe</span>
          </div>
          <div class="mb-5 col-md-6 col-lg-3">
            <h6 class="my-0">Completion:</h6>
            <span>February 5th, 2020</span>
          </div>
          <div class="mb-5 col-md-6 col-lg-3">
            <h6 class="my-0">Project Type:</h6>
            <span>Illustration</span>
          </div>
          <div class="mb-5 col-md-6 col-lg-3">
            <h6 class="my-0">Authors</h6>
            <span>Logan Cee, Paul</span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <h6 class="my-0">Budget:</h6>
            <span>$12000</span>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6 class="my-0">Authors</h6>
            <span>Logan Cee, Paul</span>
          </div>
        </div>
      </div>
      <img alt="" class="mt-5 pt-2 w-100" src="img/news/<?= $single_project['projects_photo'] ?>">
    </div>
  <?php endforeach; ?>
  <!-- Project Modal Dialog 2 -->
  <div id="project2" class="container mfp-hide zoom-anim-dialog">
    <h2 class="mt-0">Neuro</h2>
    <div class="mt-5 pt-2 text-dark">
      <div class="row">
        <div class="col-md-3">
          <h6 class="my-0">Clients:</h6>
          <span>Ethan Hunt, John Doe</span>
        </div>
        <div class="col-md-3">
          <h6 class="my-0">Completion:</h6>
          <span>February 5th, 2020</span>
        </div>
        <div class="col-md-3">
          <h6 class="my-0">Project Type:</h6>
          <span>Illustration</span>
        </div>
        <div class="col-md-3">
          <h6 class="my-0">Authors</h6>
          <span>Logan Cee, Paul</span>
        </div>
      </div>
      <div class="mt-5 row">
        <div class="col-md-3">
          <h6 class="my-0">Budget:</h6>
          <span>$12000</span>
        </div>
        <div class="col-md-3">
          <h6 class="my-0">Authors</h6>
          <span>Logan Cee, Paul</span>
        </div>
      </div>
    </div>
    <img alt="" class="mt-5 pt-2 w-100" src="img/portfolio/1140x641-2.jpg">
  </div>

  <!-- Project Modal Dialog 3 -->
  <div id="project3" class="container mfp-hide zoom-anim-dialog">
    <h2 class="mt-0">Neuro</h2>
    <div class="mt-5 pt-2 text-dark">
      <div class="row">
        <div class="col-md-3">
          <h6 class="my-0">Clients:</h6>
          <span>Ethan Hunt, John Doe</span>
        </div>
        <div class="col-md-3">
          <h6 class="my-0">Completion:</h6>
          <span>February 5th, 2020</span>
        </div>
        <div class="col-md-3">
          <h6 class="my-0">Project Type:</h6>
          <span>Illustration</span>
        </div>
        <div class="col-md-3">
          <h6 class="my-0">Authors</h6>
          <span>Logan Cee, Paul</span>
        </div>
      </div>
      <div class="mt-5 row">
        <div class="col-md-3">
          <h6 class="my-0">Budget:</h6>
          <span>$12000</span>
        </div>
        <div class="col-md-3">
          <h6 class="my-0">Authors</h6>
          <span>Logan Cee, Paul</span>
        </div>
      </div>
    </div>
    <img alt="" class="mt-5 pt-2 w-100" src="img/portfolio/1140x641-3.jpg">
  </div>


  <!-- Testimonials -->
  <section id="testimonials" class="testimonials section">
    <div class="container">

      <div class="carousel-testimonials owl-carousel">
        <?php
        $testi_Select_query = panda_all('testimonials');
        // $news_from_db = mysqli_query(connect_to_db(), $news_Select_query);
        ?>
        <?php foreach ($testi_Select_query as $single_testi) : ?>
          <div class="col-testimonial" data-aos="fade-up">
            <span class="quiote">"</span>
            <p data-aos="fade-up"><?= $single_testi['testi_discription'] ?></p>
            <p class="mt-5 text-dark" data-aos="fade-up"><strong><?= $single_testi['name'] ?></strong> -<?= $single_testi['designation'] ?></p>
          </div>
        <?php
        endforeach;
        ?>

      </div>
    </div>
  </section>

  <!-- News -->
  <section id="news" class="section bg-light">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-md-6" data-aos="fade-up">
          <h2 class="mb-3 mb-md-0">Latest news</h2>
        </div>
        <div class="col-md-5 offset-md-1 text-md-right">
          <h6 class="text-gray my-0"><a href="#">View all news</a></h6>
        </div>
      </div>
      <div class="mt-5 pt-5">
        <div class="row-news row">
          <?php
          $news_Select_query = panda_all('news');
          // $news_Select_query = "SELECT * FROM news";
          // $news_from_db = mysqli_query(connect_to_db(), $news_Select_query);
          ?>
          <?php foreach ($news_Select_query as $single_new) : ?>
            <div class="col-news col-md-6 col-lg-4" data-aos="fade-in" data-aos-delay="0">
              <figure class="position-relative">
                <div class="position-relative">
                  <a href=""><img alt="" class="w-100 d-block" src="img/news/<?= $single_new['news_photo'] ?>"></a>
                  <mark class="date"><?= $single_new['created_date'] ?></mark>
                </div>
                <figcaption>
                  <h5><a href=""><?= $single_new['news_name'] ?></a></h5><?= substr($single_new['news_discription'], 0, 49) ?> ...
                </figcaption>
              </figure>
            </div>
          <?php
          endforeach;
          ?>

        </div>
      </div>
    </div>
  </section>

  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="row-partners row">
        <?php
        $a = panda_all('partners');
        $partners_Select_query = "SELECT * FROM partners";
        $t = mysqli_query(connect_to_db(), $partners_Select_query);
        ?>
        <?php foreach ($a as $single_partner) : ?>
          <div class="col-partner col-md-6 col-lg-3" data-aos="fade-in">
            <img alt="" src="../img/news/<?= $single_partner['partners_photos'] ?>">
          </div>
        <?php
        endforeach;
        ?>

      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer>
    <div class="section bg-dark py-5 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <h6 class="text-white mb-4">Phone:</h6>
            <p class="text-white mb-4"><?= panda_setup('setups', 'phone') ?></p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6 class="text-white mb-4">Email:</h6>
            <p class="text-white mb-4"><?= panda_setup('setups', 'email') ?></p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6 class="text-white mb-4">Follow me:</h6>
            <ul class="social-icons">
              <li><a href="#">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a></li>
              <li><a href="#">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a></li>
              <li><a href="#">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a></li>
              <li><a href="#">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a></li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6 class="text-white mb-4">Subscribe:</h6>
            <form class="js-subscribe-form">
              <div class="input-group">
                <input id="mc-email" type="email" class="form-control" placeholder="Email">
                <div class="input-group-append">
                  <button class="btn" type="submit">Go</button>
                </div>
              </div>
              <label class="mc-label" for="mc-email" id="mc-notification"></label>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-copy section-sm">
      <div class="container">© Copyright <?= date('Y') ?> <?= panda_setup('setups', 'author_name') ?>. All Rights Reserved</div>
    </div>
  </footer>

  <!-- Modal -->
  <div class="modal fade" id="send-request">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title mt-0">Send request</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Leave your contacts and our managers
            will contact you soon.</p>
          <form class="form-request js-ajax-form">
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" required="" placeholder="Email *">
            </div>
            <div class="form-group">
              <textarea rows="3" name="message" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="message" id="success-message">Your message is successfully sent...</div>
            <div class="message" id="error-message">Sorry something went wrong</div>
            <div class="form-group mb-0 text-right">
              <button type="submit" class="btn">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <script src="js/jquery-1.12.4.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  <script src="js/jarallax.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/interface.js"></script>
</body>

</html>