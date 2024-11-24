<?php
  $baseurl='http://localhost/Job-Portal/';
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Portal - Skill Seekers</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>Assets/Css/style.css">

    <nav class="navbar navbar-expand-lg theme-background-dark sticky-top">
      <div class="container">
        <a class="navbar-brand text-light" href="<?php echo $baseurl; ?>index.php"><h2>SkillSeekers</h2></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link text-light" aria-current="page" href="<?php echo $baseurl; ?>index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="<?php echo $baseurl; ?>about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="<?php echo $baseurl; ?>contact.php">Contact Us</a>
            </li>
          </ul>
        </div>
        

        <div class="dropdown mx-2">
          <a class="btn theme-button-light text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user"></i> User
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="user-register.php">Register</a></li>
            <li><a class="dropdown-item" href="user-login.php">Login</a></li>
           
          </ul>
        </div>

        <div class="dropdown">
          <a class="btn theme-button-light text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user-plus"></i> Company
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="company-register.php">Register</a></li>
            <li><a class="dropdown-item" href="company-login.php">Login</a></li>
           
          </ul>
        </div>
                

      </div>
    </nav>

  </head>
  <body class="theme-background-light">
    