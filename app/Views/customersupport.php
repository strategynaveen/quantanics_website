<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Quantanics Website</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <!-- google font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A400&display=swap" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <!--semantic ui cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/customersupport.css">
</head>

<body>

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
  <?php require_once "Header.php"; ?>

  <div class="content">

    <img class="ui fluid image" src=" <?php echo base_url(); ?>/assets/servicesimg/customerserviceimages/img1.png">
    <div class="texts">
      <h1>We are deeply engaged with Customers & provide Services for Iot,
        Machine learning & Artificial intelligence products. </h1>
    </div>
    <div class="ui segment" style="font-size:16px; margin:0;padding-bottom:5%;border:none;">
      <div class="ui four statistics" style="margin-top:3%;">
        <div class="statistic">
          <div class="value">
            100+
          </div>
          <div class="label">
            PRODUCTS
          </div>
        </div>
        <div class="statistic">
          <div class=" value">
            50+
          </div>
          <div class="label">
            MVP's
          </div>
        </div>
        <div class="statistic">
          <div class="value">
           20+
          </div>
          <div class="label">
            AWARDS
          </div>
        </div>
        <div class="statistic">
          <div class="value">

            200+
          </div>
          <div class="label">
            TEAM MEMBERS
          </div>
        </div>
      </div>

      <div style="padding:5% 2%;">
        <img class="ui large left floated image" src="<?php echo base_url(); ?>/assets/servicesimg/customerserviceimages/img2.jpeg"><br>
        <h1 style="padding-top:7%;">Installation & Testing</h1>
        <p>Our well trained service engineers will ensure safe and proper installation of your products. They will demonstrate how to use and handle the product for better life cycle. Hence its leads to better goodwill of your company.</p>
      </div>

      <div style="padding-top:11%;">
          <img class="ui large right floated image" src="<?php echo base_url(); ?>/assets/servicesimg/customerserviceimages/img3.jpg"><br>
        <h1 style="padding:2% 0;">Upgradation</h1>
        <p>User needs, technologies and market trends are fast changing. It is required to continuously upgrade System Software, Hardware and Embedded Software of existing products and deliver value continuously. We help you to upgrade your products and solutions when and where required.</p>
        </div>

      <div style="padding:7% 2%;">
        <img class="ui large left floated image" src="<?php echo base_url(); ?>/assets/servicesimg/customerserviceimages/img4.jpg"><br>
        <h1 style="padding: 2% 0;">Maintenance</h1>
        <p>Electronics and IT Systems requires proper maintenance in order to make their availability high. We provide managed services through Comprehensive Annual Maintenance Contract with real time monitoring of equipment functionality and perform predictive maintenance.</p>
      </div>
    </div>
  </div>












    <!-- Footer -->
    <?php require_once "Footer.php"; ?>
    <!-- Footer -->






  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>





</body>

</html>
