<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
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
  <!-- google font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A400&display=swap" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/refund.css">
</head>

<body>

  <!--- navigation bar -->

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

    <div class="iot_service" >
        <img class="ui fluid image" src="<?php echo base_url(); ?>/assets/base_img/etapimages1.jpg">
    </div>
      
  <div class="content" style="font-size: 20px">
    We, Quantanics, are now into Etap works too!!!.
    <br  />
    <br />
    We have knowledged technical people who can work on Etap for bigger projects such as Airports, Hospitals, etc.
    <br />
    <br />
    We can do Load Flow Analysis, Short Circuit Studies, Relay Coordination, Harmonic Analysis & Arc Flash Study currently.
    <br />
    <br />
    In near future, we will be able to cover Reliability Assessment & Motor Acceleration, etc.
    <br />
    <br />
    We look forward to have our clients to engage us in Etap alongwith our regular Electronics Business.
    <br />
    <br />
    <p>To Know More About Etap Solutions.  <a href="https://etap.com/docs/default-source/brochures/etap-solutions-overview.pdf?sfvrsn=88144c7c_74">Click Here ...!</a></p>
   
  </div>

    <!-- Footer -->
    <?php require_once "Footer.php"; ?>
    <!-- Footer -->




    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous"
      referrerpolicy="no-referrer">
    </script>

</body>

</html>
