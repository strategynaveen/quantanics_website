<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Quantanics</title>
  <!--semantic ui cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"
    integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <!-- stylesheet-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/client1.css?version=<?php echo rand() ?>">
  <!-- google font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A400&display=swap"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
  <?php require_once "Header.php"; ?>
  <!--- navigation bar -->

  <!--- navigation bar -->
  <!-- <nav class="navbar">
        <span class="navbar-brand mb-0 h1">
          <img src="<?php echo base_url(); ?>/assets/base_img/logo1.png" alt="" style="width:8%;">QUANTANICS TECHSERV PVT LTD
        </span>

        <ul class="nav justify-content-end">

          <li class="nav-item">
            <a class="nav-link text-dark" href="<?php echo base_url('/public/index.php/Home/load_option/index'); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark " aria-current="page" href="<?php echo base_url('/public/index.php/Home/load_option/about'); ?>">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="<?php echo base_url('/public/index.php/Home/load_option/iotservice'); ?>">Iot Services</a></li>
              <li><a class="dropdown-item" href="<?php echo base_url('/public/index.php/Home/load_option/customersupport'); ?>">Customer Services</a></li>
              <li><a class="dropdown-item" href="<?php echo base_url('/public/index.php/Home/load_option/productdev'); ?>">Product Development Serives</a></li>
              <li><a class="dropdown-item" href="<?php echo base_url('/public/index.php/Home/load_option/Etap'); ?>">Etap Solution</a></li>
          </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="<?php echo base_url('/public/index.php/Home/load_option/client'); ?>">Our clients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="<?php echo base_url('/public/index.php/Home/load_option/contact'); ?>">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="<?php echo base_url('/public/index.php/Home/load_option/work'); ?>">Work</a>
          </li>

          <li class="nav-item">
            <a class="btn btn-primary text-light" href="mailto:support@quantanics.in" role="button">Get a Quote</a>
          </li>
        </ul>
      </nav> -->

  <!---clients section--->
  <!-- <div class="ui four column relaxed grid" style="padding:5% 12%; justify-content: center;">


      <div class="column">
        <img src="<?php echo base_url(); ?>/assets/clients/img1.png" alt="">
      </div>
      <div class="column">
        <img src="<?php echo base_url(); ?>/assets/clients/img2.png" alt="">
      </div>
      <div class="column">
        <img src="<?php echo base_url(); ?>/assets/clients/img3.png" alt="">
      </div>
      <div class="column">
          <img src="<?php echo base_url(); ?>/assets/clients/img4.png" alt="">
      </div>
      <div class="column">
          <img src="<?php echo base_url(); ?>/assets/clients/img5.jpg" alt="">
      </div>
      <div class="column">
          <img src="<?php echo base_url(); ?>/assets/clients/img6.png" alt="">
      </div>
      <div class="column">
          <img src="<?php echo base_url(); ?>/assets/clients/img7.png" alt="">
      </div>
      <div class="column">
          <img src="<?php echo base_url(); ?>/assets/clients/img8.jpg" alt="">
      </div>
      <div class="column">
          <img src="<?php echo base_url(); ?>/assets/clients/img9.png" alt="">
      </div>
      <div class="column">
          <img src="<?php echo base_url(); ?>/assets/clients/img10.png" alt="">
      </div>
      <div class="column">
          <img src="<?php echo base_url(); ?>/assets/clients/img11.png" alt="">
      </div>
      <div class="column">
          <img src="<?php echo base_url(); ?>/assets/clients/img12.jfif" alt="">
      </div>
      <div class="column">
          <img src="<?php echo base_url(); ?>/assets/clients/img13.jpg" alt="">
      </div>
      <div class="column">
          <img src="<?php echo base_url(); ?>/assets/clients/img14.gif" alt="">
      </div>
      <div class="column">
          <img src="<?php echo base_url(); ?>/assets/clients/img15.jpg" alt="">
      </div>
    </div> -->



  <!-- /*******************Our Clients*********************/ -->
  <div class="html1">
    <section class="card-area">
      <section class="card-section">
        <div class="card">
          <div class="flip-card">
            <div class="flip-card__container">
              <div class="card-front">
                <!-- <img src="img/img1.png" ><img> -->
                <img src="<?php echo base_url(); ?>/assets/client/img1.png" alt="" style="margin-top: 50px;">
              </div>
              <div class="card-back">
                <img src="<?php echo base_url(); ?>/assets/client/img1.png" alt="" style="margin-top: 50px;">
              </div>
            </div>
          </div>
          <div class="inside-page">
            <div class="inside-page__container">
              <h3 class="inside-page__heading">
                NOKIA
              </h3>
              <p class="inside-page__text">

              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="card-section">
        <div class="card">
          <div class="flip-card">
            <div class="flip-card__container">
              <div class="card-front">
                <img src="<?php echo base_url(); ?>/assets/client/img2.png" alt="" style="margin-top: 0px;">
              </div>
              <div class="card-back">
                <img src="<?php echo base_url(); ?>/assets/client/img2.png" alt="" style="margin-top: 0px;">
              </div>
            </div>
          </div>
          <div class="inside-page">
            <div class="inside-page__container">
              <h3 class="inside-page__heading" style="margin-top: 15px;">
                SMI
              </h3>
              <p class="inside-page__text">

              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="card-section">
        <div class="card">
          <div class="flip-card">
            <div class="flip-card__container">
              <div class="card-front">
                <img src="<?php echo base_url(); ?>/assets/client/img3.png" alt="" style="margin-top: 40px;">
              </div>
              <div class="card-back">
                <img src="<?php echo base_url(); ?>/assets/client/img3.png" alt="" style="margin-top: 40px;">
              </div>
            </div>
          </div>
          <div class="inside-page">
            <div class="inside-page__container">
              <h3 class="inside-page__heading" style="margin-top: 15px;">
                INNOMAINT
              </h3>
              <p class="inside-page__text">

              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="card-section">
        <div class="card">
          <div class="flip-card">
            <div class="flip-card__container">
              <div class="card-front">
                <img src="<?php echo base_url(); ?>/assets/client/img4.png" alt="">
              </div>
              <div class="card-back">
                <img src="<?php echo base_url(); ?>/assets/client/img4.png" alt="">
              </div>
            </div>
          </div>
          <div class="inside-page">
            <div class="inside-page__container">
              <h3 class="inside-page__heading">
                TITAN COMPANY
              </h3>
              <p class="inside-page__text">

              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="card-section">
        <div class="card">
          <div class="flip-card">
            <div class="flip-card__container">
              <div class="card-front">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img2.png" alt="">
              </div>
              <div class="card-back">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img2.png" alt="">
              </div>
            </div>
          </div>
          <div class="inside-page">
            <div class="inside-page__container">
              <h3 class="inside-page__heading ">
                Indian Oil
              </h3>
              <p class="inside-page__text">

              </p>
            </div>
          </div>
        </div>
      </section>
    </section>

    <!-- /************2nd row****************/ -->
    <section class="card-area">
      <section class="card-section">
        <div class="card">
          <div class="flip-card">
            <div class="flip-card__container">
              <div class="card-front">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img35.png" alt="">
              </div>
              <div class="card-back">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img35.png" alt="">
              </div>
            </div>
          </div>
          <div class="inside-page">
            <div class="inside-page__container">
              <h3 class="inside-page__heading">
                Becore
              </h3>
              <p class="inside-page__text">
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="card-section">
        <div class="card">
          <div class="flip-card">
            <div class="flip-card__container">
              <div class="card-front">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img10.png" alt="" style="margin-top: 50px;">
              </div>
              <div class="card-back">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img10.png" alt="" style="margin-top: 50px;">
              </div>
            </div>
          </div>
          <div class="inside-page">
            <div class="inside-page__container">
              <h3 class="inside-page__heading" style="margin-top: 15px;">
                Smartories
              </h3>
              <p class="inside-page__text">

              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="card-section">
        <div class="card">
          <div class="flip-card">
            <div class="flip-card__container">
              <div class="card-front">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img5.jpg">
              </div>
              <div class="card-back">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img5.jpg">
              </div>
            </div>
          </div>
          <div class="inside-page">
            <div class="inside-page__container">
              <h3 class="inside-page__heading" style="margin-top: 20px;">
                Infyiot
              </h3>
              <p class="inside-page__text">

              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="card-section">
        <div class="card">
          <div class="flip-card">
            <div class="flip-card__container">
              <div class="card-front">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img34.png" alt="" style="margin-top: 40px;">
              </div>
              <div class="card-back">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img34.png" alt="" style="margin-top: 40px;">
              </div>
            </div>
          </div>
          <div class="inside-page">
            <div class="inside-page__container">
              <h3 class="inside-page__heading ">
                Teri Cryogenics
              </h3>
              <p class="inside-page__text">

              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="card-section">
        <div class="card">
          <div class="flip-card">
            <div class="flip-card__container">
              <div class="card-front">
                <img src="<?php echo base_url(); ?>/assets/client/img6.png" alt="" style="margin-top: 20px;">
              </div>
              <div class="card-back">
                <img src="<?php echo base_url(); ?>/assets/client/img6.png" alt="" style="margin-top: 20px;">
              </div>
            </div>
          </div>
          <div class="inside-page">
            <div class="inside-page__container">
              <h3 class="inside-page__heading">
                FARME TECH
              </h3>
              <p class="inside-page__text">

              </p>
            </div>
          </div>
        </div>
      </section>





    </section>
    <!-- /************3rd row***************/ -->
    <!-- <div style="display: flex;justify-content: center;align-items: center;"> -->
    <section class="card-area">
      <section class="card-section">
        <div class="card">
          <div class="flip-card">
            <div class="flip-card__container">
              <div class="card-front">
                <img src="<?php echo base_url(); ?>/assets/client/img7.png" alt="">
              </div>
              <div class="card-back">
                <img src="<?php echo base_url(); ?>/assets/client/img7.png" alt="">
              </div>
            </div>
          </div>
          <div class="inside-page">
            <div class="inside-page__container">
              <h3 class="inside-page__heading">
                JAYABHARTH HOME AND DEVELOPERS
              </h3>
              <p class="inside-page__text">

              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="card-section">
        <div class="card">
          <div class="flip-card">
            <div class="flip-card__container">
              <div class="card-front">
                <img src="<?php echo base_url(); ?>/assets/client/img8.jpg" alt="">
              </div>
              <div class="card-back">
                <img src="<?php echo base_url(); ?>/assets/client/img8.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="inside-page">
            <div class="inside-page__container">
              <h3 class="inside-page__heading">
                GEOMEO INFORMATICS
              </h3>
              <p class="inside-page__text">

              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="card-section">
        <div class="card">
          <div class="flip-card">
            <div class="flip-card__container">
              <div class="card-front">
                <img src="<?php echo base_url(); ?>/assets/client/img9.png" alt="" style="margin-top: 30px;">
              </div>
              <div class="card-back">
                <img src="<?php echo base_url(); ?>/assets/client/img9.png" alt="" style="margin-top: 30px;">
              </div>
            </div>
          </div>
          <div class="inside-page">
            <div class="inside-page__container">
              <h3 class="inside-page__heading ">
                GUVI
              </h3>
              <p class="inside-page__text">

              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="card-section">
        <div class="card">
          <div class="flip-card">
            <div class="flip-card__container">
              <div class="card-front">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img27.png " alt=""
                  style="margin-top: 40px;">
              </div>
              <div class="card-back">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img27.png " alt=""
                  style="margin-top: 40px;">
              </div>
            </div>
          </div>
          <div class="inside-page">
            <div class="inside-page__container">
              <h3 class="inside-page__heading " style="margin-top: 5px;">
                Stematic
              </h3>
              <p class="inside-page__text">

              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="card-section">
        <div class="card">
          <div class="flip-card">
            <div class="flip-card__container">
              <div class="card-front">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img32.png" alt="">
              </div>
              <div class="card-back">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img32.png" alt="">
              </div>
            </div>
          </div>
          <div class="inside-page">
            <div class="inside-page__container">
              <h3 class="inside-page__heading ">
                Priya Enterplex
              </h3>
              <p class="inside-page__text">

              </p>
            </div>
          </div>
        </div>
      </section>




    </section>
    <!-- </div> -->
    <!-- /**********4th row***********/ -->
    <!-- <div style="display: flex;justify-content: center;align-items: center;"> -->
    <section class="card-area">

      <section class="card-section">
        <div class="card">
          <div class="flip-card">
            <div class="flip-card__container">
              <div class="card-front">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img33.png" alt="" style="margin-top: 70px;">
              </div>
              <div class="card-back">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img33.png" alt="" style="margin-top: 70px;">
              </div>
            </div>
          </div>
          <div class="inside-page">
            <div class="inside-page__container">
              <h3 class="inside-page__heading" style="margin-top: 20px;">
                Rams Apartment
              </h3>
              <p class="inside-page__text">

              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="card-section">
        <div class="card">
          <div class="flip-card">
            <div class="flip-card__container">
              <div class="card-front">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img29.png">
              </div>
              <div class="card-back">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img29.png">
              </div>
            </div>
          </div>
          <div class="inside-page">
            <div class="inside-page__container">
              <h3 class="inside-page__heading ">
                National Institute of Technology Puducherry
              </h3>
              <p class="inside-page__text">

              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="card-section">
        <div class="card">
          <div class="flip-card">
            <div class="flip-card__container">
              <div class="card-front">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img22.png" alt="">
              </div>
              <div class="card-back">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img22.png" alt="">
              </div>
            </div>
          </div>
          <div class="inside-page">
            <div class="inside-page__container">
              <h3 class="inside-page__heading">
                Industrial Technoblitz
              </h3>
              <p class="inside-page__text">
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="card-section">
        <div class="card">
          <div class="flip-card">
            <div class="flip-card__container">
              <div class="card-front">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img36.jpg" alt="" style="margin-top: 0px;">
              </div>
              <div class="card-back">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img36.jpg" alt="" style="margin-top: 0px;">
              </div>
            </div>
          </div>
          <div class="inside-page">
            <div class="inside-page__container">
              <h3 class="inside-page__heading ">
                iBus Technologies
              </h3>
              <p class="inside-page__text">

              </p>
            </div>
          </div>
        </div>
      </section>




    </section>
    <!-- </div> -->

    <!-- /**********5th row***********/ -->
    <!-- <div style="display: flex;justify-content: center;align-items: center;"> -->
    <section class="card-area">
      <section class="card-section">
        <div class="card">
          <div class="flip-card">
            <div class="flip-card__container">
              <div class="card-front">
                <img src="<?php echo base_url(); ?>/assets/client/img5.jpg" alt="">
              </div>
              <div class="card-back">
                <img src="<?php echo base_url(); ?>/assets/client/img5.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="inside-page">
            <div class="inside-page__container">
              <h3 class="inside-page__heading ">
                GALWIN TECHNLOGY
              </h3>
              <p class="inside-page__text">
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="card-section">
        <div class="card">
          <div class="flip-card">
            <div class="flip-card__container">
              <div class="card-front">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img14(1).png" alt=""
                  style="margin-top: 50px;">
              </div>
              <div class="card-back">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img14(1).png" alt=""
                  style="margin-top: 50px;">
              </div>
            </div>
          </div>
          <div class="inside-page">
            <div class="inside-page__container">
              <h3 class="inside-page__heading">
                Prithvi
              </h3>
              <p class="inside-page__text">
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="card-section">
        <div class="card">
          <div class="flip-card">
            <div class="flip-card__container">
              <div class="card-front">
                <img src="<?php echo base_url(); ?>/assets/client/img16.png" alt="" style="margin-top: 30px;">
              </div>
              <div class="card-back">
                <img src="<?php echo base_url(); ?>/assets/client/img16.png" alt="" style="margin-top: 30px;">
              </div>
            </div>
          </div>
          <div class="inside-page">
            <div class="inside-page__container">
              <h3 class="inside-page__heading" style="margin-top: 10px;">
                EDGE MATRIX
              </h3>
              <p class="inside-page__text">
              </p>
            </div>
          </div>
        </div>
      </section>






      <section class="card-section">
        <div class="card">
          <div class="flip-card">
            <div class="flip-card__container">
              <div class="card-front">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img31.png">
              </div>
              <div class="card-back">
                <img src="<?php echo base_url(); ?>/assets/client/new/prime/img31.png">
              </div>
            </div>
          </div>
          <div class="inside-page">
            <div class="inside-page__container">
              <h3 class="inside-page__heading ">
                Mobile Tronics
              </h3>
              <p class="inside-page__text">

              </p>
            </div>
          </div>
        </div>
      </section>

    </section>
    </section>
    </section>
  </div>
  <hr>
  <br>

  </div>
  <!-- /***********Text**********/ -->
  <div class="products text-center">
    <h1>Institute Clients</h1>
  </div>
  <br><br>

  <!-- /*************Institute***************/ -->



  <!-- <div style="display: flex;justify-content: center;align-items: center;"> -->
  <section class="card-area"  style="width:10rem" >
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (1).png" alt="">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (1).png" alt="">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              Thiagarajar College of Engineering
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/anna university logo.png" alt="">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/anna university logo.png" alt="">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              Anna University Regional Campus Madurai
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (25).png">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (25).png">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              Kamaraj College Of Engineering
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (24).png" alt="">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (24).png" alt="">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              <h3 class="inside-page__heading ">
                Francis Xavier Engineering College
              </h3>
              <p class="inside-page__text">

              </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (12).png" alt=""
                style="margin-top: 0px;">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (12).png" alt=""
                style="margin-top: 0px;">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              SCAD College of Engineering and Technology
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>


  </section>
  <!-- </div> -->
  <!-- /**********2nd row****************/ -->
  <!-- <div style="display: flex;justify-content: center;align-items: center;"> -->
  <section class="card-area">
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (15).png">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (15).png">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              St. Mother Theresa Engineering College
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>


    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (4).jpg" alt="">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (4).jpg" alt="">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              NPR Group of institutions
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (20).png">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (20).png">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              Velammal College of Engineering and Technology
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (21).png" alt="">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (21).png" alt="">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              Anna University Thiruchirappalli
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (5).png" alt="">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (5).png" alt="">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading">
              Mangayarkarasi College of Engineering
            </h3>
            <p class="inside-page__text">
            </p>
          </div>
        </div>
      </div>
    </section>

  </section>
  <!-- </div> -->
  <!-- /************3rd row***************/ -->
  <!-- <div style="display: flex;justify-content: center;align-items: center;"> -->
  <section class="card-area">
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (29).png" alt=""
                style="margin-top: 35px;">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (29).png" alt=""
                style="margin-top: 35px;">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              Kongunadu College of Engineering and Technology
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (11).png" alt=""
                style="margin-top: 20px;">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (11).png" alt=""
                style="margin-top: 20px;">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading">
              SASTRA Deemed University
            </h3>
            <p class="inside-page__text">
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (7).png" alt=""
                style="margin-top: 15px;">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (7).png" alt=""
                style="margin-top: 15px;">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              Nadar Saraswathi College of Engineering & Technology
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (3).png" alt="">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (3).png" alt="">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              Malla Reddy College of Engineering
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (2).png">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (2).png">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              Mahendra Engineering College
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
  </section>
  <!-- </div> -->
  <!-- /**********4th row***********/ -->
  <!-- <div style="display: flex;justify-content: center;align-items: center;"> -->
  <section class="card-area">
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (4).png" alt="">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (4).png" alt="">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              M.A.M. College of Engineering
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (16).png" alt="">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (16).png" alt="">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading">
              Solamalai College of Engineering Madurai
            </h3>
            <p class="inside-page__text">
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (1).jpg" alt=""
                style="margin-top: 20px;">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (1).jpg" alt=""
                style="margin-top: 20px;">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              Nehru Institute of Engineering and Technology
            </h3>
          </div>
          <p class="inside-page__text">

          </p>
        </div>
      </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (9).png" alt="">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (9).png" alt="">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              Nehru Group of Institutions
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (13).png" alt="">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (13).png" alt="">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              Sethu Institute of Technology
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
  </section>
  <!-- </div> -->

  <!-- /**********5th row***********/ -->
  <!-- <div style="display: flex;justify-content: center;align-items: center;"> -->
  <section class="card-area">

    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (22).png" alt=""
                style="margin-top: 0px;">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (22).png" alt=""
                style="margin-top: 0px;">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              Chennai Institute of Technology
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/img10.png" alt="">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/img10.png" alt="">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading">
              CIT TRANSFORMING LIVES
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (10).png">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (10).png">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              National Institute of Technology Puducherry
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>


    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (28).png" alt=""
                style="margin-top: 5px;">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (28).png" alt=""
                style="margin-top: 5px;">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              K.L.N College of Information Technology
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (26).png" alt="">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (26).png" alt="">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading">
              Ramco Institute of Technology
            </h3>
            <p class="inside-page__text">
            </p>
          </div>
        </div>
      </div>
    </section>

  </section>


  <!-- </div> -->
  <!-- /************6th row***********/ -->
  <!-- <div style="display: flex;justify-content: center;align-items: center;"> -->
  <section class="card-area">




    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (23).png" alt="">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (23).png" alt="">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              Fatima College
            </h3>
          </div>
          <p class="inside-page__text">

          </p>
        </div>
      </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (6).png" alt="">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (6).png" alt="">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading">
              Mannar Thirumalai Naicker College
            </h3>
            <p class="inside-page__text">
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/tiruvalluvar.jpg" alt=""
                style="margin-top: 0px;">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/tiruvalluvar.jpg" alt=""
                style="margin-top: 0px;">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              Thiruvalluvar Arts and Science college
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/ldc.png" alt="">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/ldc.png" alt="">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              Lady Doak College
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/Kln poly.jpg" alt="">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/Kln poly.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              KLN Polytechnic College
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
  </section>
  <!-- </div> -->

  <!-- /***********7th row***************/ -->
  <!-- <div style="display: flex;justify-content: center;align-items: center;"> -->
  <section class="card-area">


    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (3).jpg" alt=""
                style="margin-top: 15px;">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (3).jpg" alt=""
                style="margin-top: 15px;">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading">
              Ramu-Seetha Polytechnic College
            </h3>
            <p class="inside-page__text">
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (18).png" alt="">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (18).png" alt="">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              Tamilnadu Government Polytechnic College
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (30).png" style="margin-top: 10px;">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (30).png" style="margin-top: 10px;">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              Entrepreneurship Development And Innovation Institute
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/Ministry-of-Culture.jpg">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/Ministry-of-Culture.jpg">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              Ministry of Culture
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/ncsm.png" alt="">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/ncsm.png" alt="">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading">
              N.C.S.M INDIA
            </h3>
            <p class="inside-page__text">
            </p>
          </div>
        </div>
      </div>
    </section>


  </section>
  <!-- </div> -->

  <!-- /***********9th row***************/ -->
  <!-- <div style="display: flex;justify-content: center;align-items: center;"> -->
  <section class="card-area">

    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (2).jpg" alt="">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (2).jpg" alt="">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              Greenvalley International School
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/anjac.jpg" alt="" style="margin-top: 0px;">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/anjac.jpg" alt="" style="margin-top: 0px;">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              ANJAC
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/gvtech.png" alt="">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/gvtech.png" alt="">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              Gov Tech Thon
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>



    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img(32).png">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img(32).png">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              Nagasiva Polytechnic College
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/killikulam.png">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/killikulam.png">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              Killikulam Agri Research Incubation Form
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
  </section>


  <section class="card-area">


    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (31).png" alt="">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (31).png" alt="">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading">
              Annamalai Innovation and Incubation Research Foundation
            </h3>
            <p class="inside-page__text">
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (14).png" alt=""
                style="margin-top: 50px;">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (14).png" alt=""
                style="margin-top: 50px;">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              Subbalakshmi Lakshmipathy College of Science
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (19).png">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/academic/img (19).png">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading ">
              Tamil Nadu Agricultural University
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
  </section>









  <!-- Footer -->
  <?php require_once "Footer.php"; ?>
  <!-- Footer -->





  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"
    integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
</body>

</html>