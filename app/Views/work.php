<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Quantanics</title>
  <!--semantic ui cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <!--bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- stylesheet-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/workstyle.css">
  <!-- google font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A400&display=swap" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>


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
          <a class="nav-link text-dark " aria-current="page" href="<?php echo base_url('/public/index.php/Home/load_option/about');?>">About</a>
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

  <!--cards section-->
  <div class="card-container">

    <div class="ui special cards">
      <div class="ui three cards">

        <div class="card" style="margin:2%; width:344px; height:330px">
          <div class="blurring dimmable image">
            <div class="ui  dimmer">
              <div class="content">
                <div class="center">
                  
                </div>
              </div>
            </div>
            <img src="<?php echo base_url(); ?>/assets/workimages/img1.jpg" style="height:260px;">
          </div>
          <div class="content">
            <a class="header" style="text-decoration:none;font-size:20px;">Home Automation</a>
            <div class="meta">
              <span class="date">Internet of Things</span>
            </div>
          </div>
        </div>

        <div class=" card" style="margin:2%; width:344px; height:330px">
          <div class="blurring dimmable image">
            <div class="ui  dimmer">
              <div class="content">
                <div class="center">
                 
                </div>
              </div>
            </div>
            <img src="<?php echo base_url(); ?>/assets/workimages/img2.jpg" style="height:260px;">
          </div>
          <div class="content">
            <a class="header" style="text-decoration:none;font-size:20px;">Agriculture Automation</a>
            <div class="meta">
              <span class="date">Internet of Things</span>
            </div>
          </div>
        </div>

        <div class="card" style="margin:2%; width:344px; height:330px">
          <div class="blurring dimmable image">
            <div class="ui dimmer">
              <div class="content">
                <div class="center">
                 
                </div>
              </div>
            </div>
            <img src="<?php echo base_url(); ?>/assets/workimages/img3.jpg" style="height:260px;">
          </div>
          <div class="content">
            <a class="header" style="text-decoration:none;font-size:20px;">Power Monitoring</a>
            <div class="meta">
              <span class="date">Internet of Things</span>
            </div>
          </div>
        </div>


        <div class="card" style="margin:2%; width:344px; height:330px">
          <div class="blurring dimmable image">
            <div class="ui dimmer">
              <div class="content">
                <div class="center">
                  
                </div>
              </div>
            </div>
            <img src="<?php echo base_url(); ?>/assets/workimages/img4.jpg" style="height:260px;">
          </div>
          <div class="content">
            <a class="header"style="text-decoration:none;font-size:20px;">Object Detection</a>
            <div class="meta">
              <span class="date">Machine Learinig</span>
            </div>
          </div>
        </div>

        <div class=" card" style="margin:2%; width:344px; height:330px">
          <div class="blurring dimmable image">
            <div class="ui  dimmer">
              <div class="content">
                <div class="center">
                 
                </div>
              </div>
            </div>
            <img src="<?php echo base_url(); ?>/assets/workimages/img5.jpg" style="height:260px;">
          </div>
          <div class="content">
            <a class="header" style="text-decoration:none;font-size:20px;">Emergency Exit</a>
            <div class="meta">
              <span class="date">Machine Learning</span>
            </div>
          </div>
        </div>

        <div class="card" style="margin:2%; width:344px; height:330px">
          <div class="blurring dimmable image">
            <div class="ui dimmer">
              <div class="content">
                <div class="center">
                 
                </div>
              </div>
            </div>
            <img src="<?php echo base_url(); ?>/assets/workimages/img6.jpg" style="height:260px;">
          </div>
          <div class="content">
            <a class="header" style="text-decoration:none;font-size:20px;">Object Tracking</a>
            <div class="meta">
              <span class="date">Machine Learning</span>
            </div>
          </div>
        </div>


        <div class="card" style="margin:2%; width:344px; height:330px">
          <div class="blurring dimmable image">
            <div class="ui dimmer">
              <div class="content">
                <div class="center">
                 
                </div>
              </div>
            </div>
            <img src="<?php echo base_url(); ?>/assets/workimages/img7.png" style="height:260px;">
          </div>
          <div class="content">
            <a class="header"style="text-decoration:none;font-size:20px;">Smart Washroom Management</a>
            <div class="meta">
              <span class="date">Artificial Intelligence</span>
            </div>
          </div>
        </div>

        <div class=" card" style="margin:2%; width:344px; height:330px">
          <div class="blurring dimmable image">
            <div class="ui dimmer">
              <div class="content">
                <div class="center">
                
                </div>
              </div>
            </div>
            <img src="<?php echo base_url(); ?>/assets/workimages/img9.jpg" style="height:260px;">
          </div>
          <div class="content">
            <a class="header" style="text-decoration:none;font-size:20px;">Industrial Automation</a>
            <div class="meta">
              <span class="date">Artificial Intelligence</span>
            </div>
          </div>
        </div>

        <div class="card" style="margin:2%; width:344px; height:330px">
          <div class="blurring dimmable image">
            <div class="ui  dimmer">
              <div class="content">
                <div class="center">
                 
                </div>
              </div>
            </div>
            <img src="<?php echo base_url(); ?>/assets/workimages/img8.jpg" style="height:260px;">
          </div>
          <div class="content">
            <a class="header" style="text-decoration:none;font-size:20px;">Smart Clock</a>
            <div class="meta">
              <span class="date" >Artificial Intelligence</span>
            </div>
          </div>
        </div>

        <div class="card" style="margin:2%; width:344px; height:330px">
          <div class="blurring dimmable image">
            <div class="ui  dimmer">
              <div class="content">
                <div class="center">
                  
                </div>
              </div>
            </div>
            <img src="<?php echo base_url(); ?>/assets/workimages/img10.jpg" style="height:260px;">
          </div>
          <div class="content">
            <a class="header" style="text-decoration:none;font-size:20px;">AC Automation</a>
            <div class="meta">
              <span class="date">Internet of Things</span>
            </div>
          </div>
        </div>

        <div class="card" style="margin:2%; width:344px; height:330px">
          <div class="blurring dimmable image">
            <div class="ui  dimmer">
              <div class="content">
                <div class="center">
                  
                </div>
              </div>
            </div>
            <img src="<?php echo base_url(); ?>/assets/workimages/img11.png" style="height:260px;">
          </div>
          <div class="content">
            <a class="header" style="text-decoration:none;font-size:20px;">Smart Waste Decomposer</a>
            <div class="meta">
              <span class="date">Internet of Things</span>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>



    <!-- Footer -->
      <?php require_once "Footer.php"; ?>
    <!-- Footer -->






  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous" referrerpolicy="no-referrer">
  </script>
  <script src="<?php echo base_url(); ?>/assets/js/work.js" charset="utf-8"></script>
</body>

</html>
