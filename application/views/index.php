<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PANCHAGAVYA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url() . 'assets/assets/img/favicon.png' ?>" rel="icon">
  <link href="<?php echo base_url() . 'assets/assets/img/apple-touch-icon.png' ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url() . 'assets/assets/vendor/animate.css/animate.min.css' ?>" rel="stylesheet">
  <link href="<?php echo base_url() . 'assets/assets/vendor/aos/aos.css" rel="stylesheet' ?>">
  <link href="<?php echo base_url() . 'assets/assets/vendor/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">
  <link href="<?php echo base_url() . 'assets/assets/vendor/bootstrap-icons/bootstrap-icons.css' ?>" rel="stylesheet">
  <link href="<?php echo base_url() . 'assets/assets/vendor/boxicons/css/boxicons.min.css' ?>" rel="stylesheet">
  <link href="<?php echo base_url() . 'assets/assets/vendor/glightbox/css/glightbox.min.css ' ?>" rel="stylesheet">
  <link href="<?php echo base_url() . 'assets/assets/vendor/swiper/swiper-bundle.min.css' ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url() . 'assets/assets/css/style.css' ?>" rel="stylesheet" >


</head>

<body>
  <?php if ($error = $this->session->flashdata('error')) { ?>
    <p style="color :green;"><strong>Success!</strong> <?php echo $error; ?></p>
  <?php } ?>



  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <?php foreach ($admin as $iam) { ?>
          <i class="bi bi-phone d-flex align-items-center"><span><?php echo $iam->phone ?></span></i>
          <i class="bi bi-clock d-flex align-items-center ms-4"><span> <?php echo $iam->time ?></span></i>
        <?php } ?>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <!-- <li>En</li> -->
          <li><a href="<?php echo base_url('SigninController/sign_in') ?>" class="btn btn-dark"><b>admin</b></a></li>

        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="<?php echo base_url('Welcome/index') ?>">Panchagavya</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
          <li><a class="nav-link scrollto" href="#events">Events</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Creators</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Book me</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <?php foreach ($bg_image_1 as $img1) { ?>
  <section id="hero" class="d-flex align-items-center"
   style="background-image: url('<?php echo base_url() . 'uploads/bg_image/'.$img1->name ?>');
  background-size: cover; height:100vh; width:100%;padding:0;position:relative;">
  <?php } ?>

    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Anar Skin Care Products</span></h1>
          <h2>A Product by Panchagavya</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book your favourite</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <?php foreach ($admin as $iam) { ?>
            <a href="<?php echo $iam->youtube ?>" class="glightbox play-btn"></a>
          <?php } ?>
        </div>

      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <?php foreach ($bg_image_2 as $img2) { ?>
    <section id="about" class="about" style="background-image: url('<?php echo base_url() . 'uploads/bg_image/'.$img2->name ?>');
  background-size: cover; height:100vh; width:100%;padding:80px 0;position:relative;">
  
      <div class="container" data-aos="fade-up">
        <?Php } ?>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
            <?php foreach ($bg_image_3 as $img3) { ?>
              <img src="<?php echo base_url() . 'uploads/bg_image/'.$img3->name ?>" alt="">
              <?Php } ?>
            </div>
          </div>
          <?php foreach ($get_about as $about) { ?>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
              <h3><?php echo $about->header ?></h3>
              <p class="fst-italic">
                <?php echo $about->body ?>
              </p>
              <!-- <ul>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p> -->

            </div>
          <?php } ?>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Why Us</h2>
          <p>Why Choose Panchagavya</p>
        </div>

        <div class="row">
          <?php $no = 1;
          foreach ($why_choose_us as $why_we) { ?>

            <div class="col-lg-4">
              <div class="box" data-aos="zoom-in" data-aos-delay="100">
                <span><?php echo $no++ ?></span>
                <h4><?php echo $why_we->title ?></h4>
                <p><?php echo $why_we->content ?></p>
              </div>
            </div>

          <?php } ?>

        </div>


      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Products</p>
        </div>


        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-12 d-flex justify-content-center">

            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <?php foreach ($category as $cate) { ?>

                <!-- <li data-filter=".filter-active">?php echo  $cate->category_name ?></li> -->
                <li data-filter=".filter-<?php echo  $cate->id ?>"><?php echo  $cate->category_name ?></li>
                <!-- <li data-filter=".filter-specialty">Specialty</li>  -->
              <?php } ?>
            </ul>

          </div>

        </div>


        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
          <?php foreach ($items as $ai) { ?>
            <div class="col-lg-6 menu-item filter-<?php echo  $ai->item_id ?>">
              <img src="<?php echo base_url() . 'uploads/' .  $ai->image ?>" class="menu-img" alt="">
              <div class="menu-content">
                <a href="#"><?php echo $ai->item_name ?></a><span><?php echo $ai->price ?> ₹</span>
              </div>
              <div class="menu-ingredients">
                <?php echo $ai->ingredients ?>
              </div>
            </div>
          <?php } ?>

        </div>

      </div>
    </section>
    <!-- End Menu Section  -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Active</h2>
          <p>Check Our Specials Active Today</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <?php foreach ($active as $act) { ?>
              <ul class="nav nav-tabs flex-column">

                <li class="nav-item">
                  <a class="nav-link active show" data-bs-toggle="tab" href="#tab-<?php echo $act->id ?> "><?php echo $act->item_name ?></a>
                </li>

                <!-- <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-2">Unde praesentium sed</a>
              </li> -->

              </ul>
            <?php } ?>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <?php foreach ($active as $act) { ?>
              <div class="tab-content">
                <div class="tab-pane active show " id="tab-<?php echo $act->id ?> ">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3><?php echo $act->sub_title ?> </h3>
                      <p class="fst-italic"><?php echo $act->about_item ?> </p>
                      <!-- <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Et nobis maiores eius. Voluptatibus ut eneveniet eius et quis magni nihil</p> -->
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="<?php echo base_url() . 'uploads/' . $act->image ?>" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              <?php } ?>
              <!-- <div class="tab-pane" id="tab-6">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Et blanditiis nemo veritatis excepturi</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?php echo base_url() . 'assets/assets/img/specials-2.png' ?>" alt="" class="img-fluid">
                  </div>
                </div>
              </div> -->

              </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <?php foreach ($bg_image_4 as $img4) { ?>
    <section id="events" class="events" style="background-image: url('<?php echo base_url() . 'uploads/bg_image/'.$img4->name ?>') ;
  background-size: cover; height:110vh; width:100%;padding:80px 0;position:relative;">
 
 <!-- .events {
    /* background: url(../img/events-bg.jpg) center center no-repeat; */
    background-size: cover;
    position: relative; -->
 
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Events</h2>
          <p>Lets Travel Through Panchagavya</p>
        </div>
        <?php } ?>
        <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <?php foreach ($events as $eve) { ?>
              <div class="swiper-slide">
                <div class="row event-item">
                  <div class="col-lg-6">
                    <img src="<?php echo base_url() . 'uploads/' . $eve->image ?>" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3><?php echo $eve->item_name ?></h3>
                    <div class="price">
                      <p><span><?php echo $eve->price ?> ₹</span></p>
                    </div>
                    <p class="fst-italic">
                      <?php echo $eve->sub_title ?>
                    </p>
                    <!-- <ul>
                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  </ul> -->
                    <p>
                      <?php echo $eve->about_item ?>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
            <?php } ?>



          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reservation</h2>
          <p>Book a Special</p>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Book a Special</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What they're saying about us</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <?php foreach ($sayings as $say) { ?>
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <?php echo $say->sayings ?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="<?php echo base_url() . 'uploads/' .  $say->image ?>" class="testimonial-img" alt="">
                  <h3><?php echo $say->name ?></h3>
                  <h4><?php echo $say->job ?></h4>
                </div>
              </div><!-- End testimonial item -->
            <?php } ?>



          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Panchagavya</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">
          <?php foreach ($gallery as $gal) { ?>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="<?php echo base_url() . 'uploads/gallery/' .  $gal->name ?>" class="gallery-lightbox" data-gall="gallery-item">
                  <img src="<?php echo base_url() . 'uploads/gallery/' .  $gal->name ?>" alt="" class="img-fluid">
                </a>
              </div>
            </div>
          <?php  } ?>



        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Creators</h2>
          <p>Our Proffesional Creators</p>
        </div>

        <div class="row">
          <?php foreach ($admin as $adm) {  ?>
            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="100">
                <img src="<?php echo base_url() . 'uploads/admin/' . $adm->image ?>" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4><?php $adm->name ?></h4>
                    <span><?php $adm->job ?></span>
                  </div>
                  <div class="social">
                    <a href="<?php $adm->twitter ?>"><i class="bi bi-twitter"></i></a>
                    <a href="<?php $adm->facebook ?>"><i class="bi bi-facebook"></i></a>
                    <a href="<?php $adm->insta ?>"><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>


        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <?php foreach ($admin as $adm) {  ?>

          <iframe style="border:0; width: 100%; height: 350px;" src="<?php echo $adm->location ?>" frameborder="0" allowfullscreen></iframe>
        <?php } ?>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">
          <?php foreach ($admin as $iam) { ?>
            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p><?php echo $iam->address ?></p>
                </div>

                <div class="open-hours">
                  <i class="bi bi-clock"></i>
                  <h4>Open Hours:</h4>
                  <p>
                    <?php echo $iam->time ?>
                  </p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p><?php echo $iam->email ?></p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p><?php echo $iam->phone ?></p>
                </div>

              </div>

            </div>
          <?Php } ?>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="" method="post" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" id="message" rows="8" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Panchagavya</h3>
              <? foreach ($admin as $iam) { ?>
                <p>
                  <?php echo $iam->address ?><br>
                  <br><br>
                  <strong>Phone:</strong><?php echo $iam->phone ?><br>
                  <strong>Email:</strong><?php echo $iam->email ?><br>
                </p>
              <? } ?>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Skin Care</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Hair Care</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Baby Care</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Gifting</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Register To Get Closer</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Panchagavya</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

        Designed by <a href="https://solbyss.com/">Solbyss</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url() . 'assets/assets/vendor/aos/aos.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/assets/vendor/glightbox/js/glightbox.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/assets/vendor/isotope-layout/isotope.pkgd.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/assets/vendor/php-email-form/validate.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/assets/vendor/swiper/swiper-bundle.min.js' ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url() . 'assets/assets/js/main.js' ?>"></script>

</body>

</html>

