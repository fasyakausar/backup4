<?php
include "koneksi_login.php";

session_start();
if( !isset($_SESSION["login"])){
  header("Location: menulogin.php");
}
include "session.php";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="stylewecare.css" />
    <link rel="stylesheet" href="styleregion.css" />

    <title>Welcome To We Care!</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: rgb(221, 60, 60)">
      <div class="container">
        <a class="navbar-brand" href="page_witel.php">Dashboard PIC Witel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#"> Reward Witel</a>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="nav-link active dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"> Witel </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Overview</a></li>
                  <li><a class="dropdown-item" href="#">Q1</a></li>
                  <li><a class="dropdown-item" href="#">Q2</a></li>
                  <li><a class="dropdown-item" href="#">Q3</a></li>
                  <li><a class="dropdown-item" href="#">Q4</a></li>
                  <li><a class="dropdown-item" href="#">Performance Weekly</a></li>
                </ul>
              </div>
              <li class="nav-item">
                <a class="btn btn-dark" aria-current="page" href="logout_witel.php">LOGOUT</a>
              </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img src="img/logotelkom2.png" alt="Logo We Care" width="200" class="rounded-circle" />
      <h1 class="display-4">Welcome To We Care</h1>
      <p class="lead">We Care More Than You Know.</p>
      <p class="lead">PT. Telkom Indonesia, Tbk</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About Us</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-4">
          <p>The purpose of this document is to present a detailed description of the Infrastructure Performance (FUSION) IT Tools System. It will explain the purpose and features of the system, the interfaces of system, and what the system will do. </p>
          </div>
          <div class="col-4">
            <p>This document is intended for both the stakeholders and the developers of the system and will be proposed to the Senior Leader of Managed Service Operation for its approval.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir About -->
    <p class="mt-5 mb-3 text-muted text-center">&copy; PT. Telkom Indonesia, Tbk 2021</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e74747" fill-opacity="1" d="M0,64L48,85.3C96,107,192,149,288,144C384,139,480,85,576,90.7C672,96,768,160,864,197.3C960,235,1056,245,1152,234.7C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
