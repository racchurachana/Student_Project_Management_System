<?php
session_start();
if (!isset($_SESSION["usn"])) {
    header("Location: login.php");
    exit();
}
?>
<html>
<head>
    <title>Projects Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<style>
    .nav-link {
          color: rgb(126 41 4 / 86%);
        }
        </style>
<body>
<nav class="navbar" style="background-color: #1e2081;">
  <div class="container-fluid">
  <a class="navbar-brand" style="font-size: large"><b><font color="white">Project management</font></b></a>
    <form>
      <a class="btn btn-outline-info" type="submit" href="knowus.php">Know us!</a>
    </form>
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
          <a class="nav-link active" href="project.php">Projects</a>
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
</nav></nav><br><br>
<div class="container">
<div class="row">
  <div class="col-sm-6">
    <div class="card text-center ">
      <div class="card-body">
      <img src="aiml.jpg" class="card-img" style="opacity: 0.3">
  <div class="card-img-overlay"><br><br><br><br><br>
        <a href="aiml.php" class="btn btn-outline-dark" style="padding: 20px 32px;
    font-size: 25px;"><em>AIML</em></a>
      </div>
    </div>
  </div></div>
  <div class="col-sm-6">
    <div class="card text-center ">
      <div class="card-body">
      <img src="dbms.jpg" class="card-img" style="opacity: 0.3;">
  <div class="card-img-overlay"><br><br><br><br><br>
        <a href="dbms.php" class="btn btn-outline-dark" style="padding: 20px 32px;
    font-size: 25px;"><em>DBMS</em></a>
      </div>
    </div>
  </div>
</div></div><br><br>
<div class="row">
  <div class="col-sm-6">
    <div class="card text-center ">
      <div class="card-body">
      <img src="iot.jpg" class="card-img" style="opacity: 0.3">
  <div class="card-img-overlay"><br><br><br><br><br><br>
        <a href="iot.php" class="btn btn-outline-dark" style="padding: 20px 32px;
    font-size: 25px;"><em>IOT</em></a>
      </div>
    </div>
  </div></div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
      <img src="cn.jpg" class="card-img" style="opacity: 0.3">
  <div class="card-img-overlay"><br><br><br><br><br><br>
        <a href="cn.php" class="btn btn-outline-dark" style="padding: 20px 32px;
    font-size: 25px;"><em>CN</em></a>
      </div>
    </div>
  </div></div>
</div>
      </body>
      </html>