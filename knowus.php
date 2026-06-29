<?php
session_start();
if (!isset($_SESSION["usn"])) {
    header("Location: login.php");
    exit();
}
?>
<html>
<head>
    <title>Know Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<style>
        body {
          background-image: url('knowus.jpg');  background-size: cover;  background-position: center; 
        }
        .nav-link {
          color: rgb(126 41 4 / 86%);
        }
        </style>
<body>
<nav class="navbar" style="background-color: #1e2081;">
  <div class="container-fluid">
  <a class="navbar-brand" style="font-size: x-large"><b><font color="white">Project management</font></b></a>
  </div>
</nav>
<nav class="navbar bg-warning-subtle" >
<nav class="navbar navbar-expand-lg bg-body-tertiary" style=" width: 100%; padding: 0;">
  <div class="container-fluid" style="background: #fff3cd;">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav" style="width: 100%; display: flex; justify-content: space-around;">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="home.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="project.php">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="upload.php">Upload File</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="student.php">Student Details</a>
        </li>
        <li class="nav-item">
        <span class="badge rounded-pill text-bg-danger"><a class="nav-link text-white" href="logout.php">Logout</a></span>
        </li>
    </div>
  </div>
</nav></nav>
<div class="main-content">
      <div class="overview">
      <div class="bg-white p-2 text-dark bg-opacity-75 rounded">
      <div class="container text-align: justify;">
  <div class="row align-items-center">
    <div class="col-md-4" style="font-size: xx-large; font-family: cursive;">
      About Us!
    </div>
    <div class="col-md-8" style="font-size: larger;">
      <br><br><br><p>Welcome to our Project Management Website, your one-stop solution for efficient and effective planning, execution and collaboration.
        In today's fast-paced business environment, successfull project management is crucial for achieving organizational goals, delivering high quality results and 
        maintaining a competitive edge. Our website is easy to navigate through projects efforlessly with our user friendly dashboard. <br><br><br>
        Get a comprehensive overview of projects and the resources used for the development of the project. Join us in transforming the way you develop projects, 
        making every project a success story.
      </p><br><br><br><br>

    </div>
  </div>
</div>

<div class="row align-items-center">
<div class="container text-center">
  <div class="row">
    <div class="col">
      <b>Address:</b> <br>Hassan College,<br>Hassan College
    </div>
    <div class="col">
     <b> Email ID:</b> <br>Hassan@gmail.com
    </div>
    <div class="col">
      <b>Contact No:</b><br>+91 888 888 8888
    </div>
  </div>
</div>
</div>


</div>
      </div>
    </div>
</div>
      </body>
      </html>
