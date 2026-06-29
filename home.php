<?php
session_start();
if (!isset($_SESSION["usn"])) {
    header("Location: login.php");
    exit();
}
?>
<html>
<head>
    <title>Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<style>
  
        .image {
            position: absolute; width: 100%; opacity: 0.1; 
        }
        .imgc {
            position: relative;
            top: 0;
            left: 0;
        }
        .main-content {
            background-image: url(2.jpg);  background-size: cover;  background-position: center; 
            height: 82vh; 
        }
        .nav-link {
          color: rgb(126 41 4 / 86%);
        }
        </style>
<body>
  <nav class="navbar" style="background-color: #1e2081;">
  <div class="container-fluid">
    <a class="navbar-brand" style="font-size: large"><b><font color="white">Project management </font></b></a>
    <form>
      <a class="btn btn-outline-info" type="submit" href="knowus.php">Know us!</a>
    </form>
  </div>
</nav>
<nav class="navbar bg-warning-subtle">
<nav class="navbar navbar-expand-lg bg-body-tertiary" style=" width: 100%; padding: 0;">
  <div class="container-fluid" style="background: #fff3cd;">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav" style="width: 100%; display: flex; justify-content: space-around;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Dashboard</a>
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
    <div class="imgc bg-dark bg-opacity-50 text-white" style="font-family: cursive;">
      <center><h2><em>Welcome!</em></h2></center>
      </div>
      <div class="overview">
      <div class="bg-white p-2 text-dark bg-opacity-75 rounded">
      <div class="container text-align: justify;">
  <div class="row align-items-center">
    <div class="col-md-4" style="font-size: xx-large; font-family: cursive;">
      Overview
    </div>
    <div class="col-md-8" style="font-size: larger;">
      <br><br><br><p>Project management  Description.</p>
        <br><br><br><p>TProject management involves planning, organizing, and overseeing the execution of a project from inception to completion. It encompasses various activities such as defining project goals, setting timelines, allocating resources, managing budgets, and coordinating teams to achieve objectives efficiently and effectively..</p><br><br><br>
    </div>
  </div>
</div></div>
      </div>
    </div>
</div>
</body>
</html>