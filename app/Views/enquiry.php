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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="enquiry.css">
</head>

<body>

    <!--- navigation bar -->
    <!-- <nav class="navbar">
      <span class="navbar-brand mb-0 h1">Quantanics Techserv Pvt Ltd </span>
      <ul class="nav justify-content-end">

          <li class="nav-item">
            <a class="nav-link text-dark" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark " aria-current="page" href="about.html">About</a>
          </li>
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Iot Services</a></li>
                  <li><a class="dropdown-item" href="#">Customer Services</a></li>
                  <li><a class="dropdown-item" href="#">Product Development Serives</a></li>
                  <li><a class="dropdown-item" href="Etap.html">Etap Solution</a></li>
                </ul>
              </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="client.html">Our clients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="contact.html">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="work.html">Work</a>
          </li>

          <li class="nav-item" >
            <a class="btn btn-primary text-light" href="mailto:support@quantanics.in" role="button" >Get a Quote</a>
          </li>
      </ul>
    </nav> -->
    <?php require_once "Header.php"; ?>



  <form action="/" method="post">
    <div class="inputbody">
      <div class="card w-100">
        <h5 class="card-header">Let's Start A Enquiry With Us</h5>
        <div class="card-body">
          <br>
          <label>Your Name</label>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-alt"></i></span>
            <input name="name" type="text" class="form-control" placeholder="Enter Your Name" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <br>
          <label>Your Email</label>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-alt"></i></span>
            <input name="email" type="text" class="form-control" placeholder="Enter Your Mail id " aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <br>
          <label>Your Phone No</label>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-alt"></i></span>
            <input name="number" type="text" class="form-control" placeholder="Enter Your Phone Number" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <br>
          <label>Type of Enquiry</label>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-alt"></i></span>
            <input name="type" type="text" class="form-control" placeholder="Enter Type Of Problem You Faced" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <br>
          <label>Your Address</label>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-alt"></i></span>
            <input name="add" type="text" class="form-control" placeholder="Enter Your Address" aria-label="Username" aria-describedby="basic-addon1">
          </div>

          <br>
          <label>Pincode</label>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-alt"></i></span>
            <input name="pcode" type="text" class="form-control" placeholder="Enter Pincode" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <br>
          <label>Description</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
            <textarea name="pdesc" id="pdesc" class="form-control" aria-label="With textarea"></textarea>
          </div>
          <br>
          <br>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
            <label class="form-check-label" for="flexSwitchCheckChecked">Agree</label>
          </div>
          <br>
          <br>
          <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button type="submit" class="btn btn-outline-success">Send Enquiry</button>
          </div>
        </div>
      </div>
    </div>
  </form>




    <!-- Footer -->
    <?php require_once "Footer.php"; ?>
    <!-- Footer -->




<script src="enquiry.js" charset="utf-8"></script>
</body>

</html>
