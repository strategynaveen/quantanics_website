<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quantanics Website</title>
  <!-- bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  <!-- google font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A400&display=swap" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <!--semantic ui cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css?version=<?php echo rand()?>">
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
</head>

<body>
  <!-- <nav class="navbar">
  <!--- navigation bar -->
  <!-- <nav class="navbar">
    <span class="navbar-brand mb-0 h1">
      <img src="<?php echo base_url(); ?>assets/base_img/logo1.png" alt="" style="width:8%;">QUANTANICS TECHSERV PVT LTD
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
  <?php require_once "Header.php"; ?>
  <!-- top container -->
  <div class="container-fluid" style="padding-bottom:5%;">
    <div class="row">
      <div class="col-md-12">

        <div class="top-container">
          <div class="content-top">
            <p></p>
            <h1>We build </h1>
            <h1>products for <h1 class="ml4">
                <span class="letters letters-1">R&D labs.</span>
                <span class="letters letters-2">Enterprises.</span>
                <span class="letters letters-3">Startups.</span>
              </h1>
            </h1>
            <br><br><br>
            <div class="products">
              <hr>
              <h4 class="num" data-val="250">0</h4>
              <h2>Products</h2>
            </div>
            <div class="mvp">
              <hr>
              <h4 class="num" data-val="500">0</h4>
              <h2>MVPs</h2>
            </div>
            <div class="awards">
              <hr>
              <h4 class="num" data-val="25">0</h4>
              <h2>Awards</h2>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
  <!--about us -->

  <div id="aboutus">
    <h1 class="containerh1" style="padding-bottom:0;">ABOUT US <br />
      <hr style="color: #fff;">
    </h1>


    <div class="ui segment" style="background-color:#38acec;font-size:16px;padding:2% 0 10% 0;border:none;">
      <img class="ui large left floated image" src="<?php echo  base_url(); ?>/assets/aboutimages/abt2.png">
      <p style="margin-top:5%;"><span style="font-size:30px;">Quantanics</span> was founded in 2018 by a group of young and rejuvenated engineers who wanted to prove their stand in Industry 4.0 by making this world a better place to live. Today, Quantanics has established a
        distinguished reputation by successfully developing intelligent devices and products for several industrial giants and MNCs. We find ourselves in a dominating position among our competitors, majorly because of the medley in our team with
        strengths in different domains such as Block
        chain, Internet of Things, Robotics & Automation, AI (Artificial Intelligence), XR (Extended Reality), Big Data & many more. We also developing industrial 3D modules and we providing technical workshops in and around tamil nadu for student,
        teaching professions and industry professions</p>

    </div>
  </div>


  <!--- our domains-->
  <h1 class="containerh1">OUR DOMAINS
    <hr>
  </h1>

  <div class="domain-section">
    <div class="domain-container">
      <div class="grid-box">
        <div class="icon" style="background-image:url(<?php echo base_url(); ?>/assets/ourdomains/MLAI.jpg);background-attachment: cover;background-position: center;background-repeat: no-repeat;background-size: cover;">
          <!-- <i class="fas fa-brain"></i> -->
        </div>
        <div class="content">
          <h3>AI & ML</h3>
          <p>Artificial Intelligence (AI) and Machine Learning (ML) are two very hot buzzwords right now, and often seem to be used interchangeably.</p>
        </div>
      </div>


      <div class="grid-box"style="background-color: rgb(255, 61, 61);">
        <div class="icon" style="background-image:url(<?php echo base_url(); ?>/assets/ourdomains/robo1.jpg);background-attachment: cover;background-position: center;background-repeat: no-repeat;background-size: cover;">
          <!-- <i class="fas fa-robot"></i> -->
        </div>
        <div class="content">
          <h3>Robotics & Automation</h3>
          <p>Automation is the process of using physical machines, computer software and other technologies to perform tasks that are usually done by humans.</p>
        </div>
      </div>

      <div class="grid-box"style="background-color: rgb(144, 218, 144);">
        <div class="icon" style="background-image:url(<?php echo base_url(); ?>/assets/ourdomains/blockchain.jpg);background-attachment: cover;background-position: center;background-repeat: no-repeat;background-size: cover;">
          <!-- <i class="fas fa-link"></i> -->
        </div>
        <div class="content">
          <h3>Block Chain</h3>
          <p> Blockchain is a shared, immutable ledger that facilitates the process of recording transactions and tracking assets in a business network.</p>
        </div>
      </div>

      <div class="grid-box" style="background-color:rgb(0,135,125);">
        <div class="icon" style="background-image:url(<?php echo base_url(); ?>/assets/ourdomains/bigdata.jpg);background-attachment: cover;background-position: center;background-repeat: no-repeat;background-size: cover;">
          <!-- <i class="fas fa-database"></i> -->
        </div>
        <div class="content">
          <h3>Big Data Analytics</h3>
          <p>Big data analytics is complex process of examining big data to uncover information that can help organizations make business decisions.</p>
        </div>
      </div>

      <div class="grid-box" style="background-color: rgb(250, 131, 151);">
        <div class="icon" style="background-image:url(<?php echo base_url(); ?>/assets/ourdomains/IoT.png);background-attachment: cover;background-position: center;background-repeat: no-repeat;background-size: cover;">
          <!-- <i class="fas fa-laptop-house"></i> -->

        </div>
        <div class="content">
          <h3>Internet Of Things</h3>
          <p>The Internet of Things (IoT) refers to a system of interrelated are able to collect and transfer data over a wireless network without human intervention.</p>
        </div>
      </div>

      <div class="grid-box" style="background-color: goldenrod;">
        <div class="icon" style="background-image:url(<?php echo base_url(); ?>/assets/ourdomains/web.jpg);background-attachment: cover;background-position: center;background-repeat: no-repeat;background-size: cover;">
          <!-- <i class="fas fa-laptop-code"></i> -->
        </div>
        <div class="content">
          <h3>Website & 3D Designing</h3>
          <p>3D modeling is the process of developing a mathematical coordinate-based representation of an object in three dimensions.</p>
        </div>
      </div>


    </div>
  </div>

  <!--- approach -->
  <div class="approach">
    <h1 class="containerh1">OUR APPROACH <br />
      <hr />
    </h1>
    <img src="<?php echo base_url(); ?>/assets/indexpageimages/img2.png" class="img-fluid" alt="Responsive image">

  </div>



  <!-- strength -->
  <div id="ourpartners">
    <h1 class="containerh1">OUR CLIENTS <br />
      <hr>
    </h1>
    <!-- <script class="count">
      new PureCounter();
    </script> -->
    <!-- <div class="span" data-aos="fade-up" data-aos-delay="100">
      <div class="count-box" style="margin-top: 20px;">
        <h4 style="color: rgba(0, 0, 0, 0.733);">
          <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="3" class="purecounter"
            style="color: rgba(0, 0, 0, 0.733);"></span>+
        </h4>
      </div>
    </div> -->
    <div class="statistic">
                <div class="value num" data-val="300">
                  0
                </div>
    </div>

    <p class="para_text" >Our clients are people and organizations with ambition and imagination to unleash the power of IT for their businesses and ideas.</p>

    <div class="ui divider" style="border:none;"></div>
    <!-- <img class="ui middle aligned massive image" src="<?php echo base_url(); ?>/assets/indexpageimages/img.jpg"> -->
    <!-- <section class="card-area">
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/img1.png" alt="" style="margin-top: 50px;">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/img1.png" alt="" style="margin-top: 50px;">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading" style="margin-top: 5px;">
              Nokia Corporation
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
            <h3 class="inside-page__heading" style="margin-top: 20px;">
              Sri Mookambika Info Solutions Pvt Ltd
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
            <h3 class="inside-page__heading" style="margin-top: 20px;">
              TITAN COMPANY LIMITED
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
            <h3 class="inside-page__heading " style="margin-top: 20px;">
              INDIAN OIL CORPORATION LIMITED
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
              <img src="<?php echo base_url(); ?>/assets/client/new/prime/img5.jpg" alt="">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/prime/img5.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading" style="margin-top: 15px;">
              InfyIoT Solutions
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
            <h3 class="inside-page__heading" style="margin-top: 20px;">
              SMARTORIES
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
            <h3 class="inside-page__heading" style="margin-top: 15px;">
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
            <h3 class="inside-page__heading " style="margin-top: 5px;">
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
              <img src="<?php echo base_url(); ?>/assets/client/new/prime/img11.png" alt="" style="margin-top: 20px;">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/prime/img11.png" alt="" style="margin-top: 20px;">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading" style="margin-top: 25px;">
              Pop Farme Tech Pvt Ltd
            </h3>
            <p class="inside-page__text">

            </p>
          </div>
        </div>
      </div>
    </section>
  </section> -->


  <!-- </div> -->
  <!-- <div style="display: flex;justify-content: center;align-items: center;"> -->
  
  
  <!-- <section class="card-area">
    <section class="card-section">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card__container">
            <div class="card-front">
              <img src="<?php echo base_url(); ?>/assets/client/new/prime/img16.png" alt="" style="margin-top: 20px;">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/new/prime/img16.png" alt="" style="margin-top: 20px;">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading " style="margin-top: 20px;">
              JAYABHARATH HOMES AND DEVELOPERS
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
              <img src="<?php echo base_url(); ?>/assets/client/img5.jpg" alt="" style="margin-top: 0px;">
            </div>
            <div class="card-back">
              <img src="<?php echo base_url(); ?>/assets/client/img5.jpg" alt="" style="margin-top: 0px;">
            </div>
          </div>
        </div>
        <div class="inside-page">
          <div class="inside-page__container">
            <h3 class="inside-page__heading" style="margin-top: 10px;">
              GALWIN TECHNOLOGY
            </h3>
            <p class="inside-page__text">
            </p>
          </div>
        </div>
      </div>
    </section>
  </section> -->
    

   
  </div>
  <!--partners -- >




  <!-- Footer -->
  <?php require_once "Footer.php"; ?>
  <!-- Footer -->




  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <!-- <script>new PureCounter();</script> -->
  <!-- <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script> -->
  <script>
    let valueDisplays = document.querySelectorAll(".num");
    let interval = 4000;
    valueDisplays.forEach((valueDisplay) => {
      let startvalue = 0;
      let endvalue = parseInt(valueDisplay.getAttribute("data-val"));
      let duration = Math.floor(interval / endvalue);
      let counter = setInterval(function () {
        startvalue += 1;
        valueDisplay.textContent = startvalue;
        if (startvalue == endvalue) {
          clearInterval(counter);
        }
      }, duration);
    });
  </script>

<script>
    let valueDisplays = document.querySelectorAll(".num");
    let interval = 4000;
    valueDisplays.forEach((valueDisplay) => {
      let startvalue = 0;
      let endvalue = parseInt(valueDisplay.getAttribute("data-val"));
      let duration = Math.floor(interval / endvalue);
      let counter = setInterval(function () {
        startvalue += 1;
        valueDisplay.textContent = startvalue;
        if (startvalue == endvalue) {
          clearInterval(counter);
        }
      }, duration);
    });
  </script>

  <script src="<?php echo base_url(); ?>/assets/js/script.js" charset="utf-8"></script>
  </div>
</body>

</html>
