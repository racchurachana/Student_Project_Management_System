<?php
session_start();
if (!isset($_SESSION["usn"])) {
    header("Location: login.php");
    exit();
}
$USN=$_SESSION["usn"];
?>
<html>
<head>
    <title>Student Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<style>
    .nav-link {
          color: rgb(126 41 4 / 86%);
        }
        .ud {
          position: relative; left:250; width: 50%;
        }
        body {
          background-image: url('student.jpg');  background-size: cover;  background-position: center;
        }
        </style>
<body>
<nav class="navbar" style="background-color: #1e2081;">
  <div class="container-fluid">
  <a class="navbar-brand" style="font-size: large"><b><font color="white">Project Management</font></b></a>
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
          <a class="nav-link" href="project.php">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="upload.php">Upload File</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="student.php">Student Details</a>
        </li>
        <li class="nav-item">
        <span class="badge rounded-pill text-bg-danger"><a class="nav-link text-white" href="logout.php">Logout</a></span>
        </li>
    </div>
  </div>
</nav></nav><br><br>
<div class="row">
  <div class="col-sm-4 mb-3 mb-sm-0">
    <div class="card text-bg-secondary">
      <div class="card-body">
      <center><form action="student.php" method="POST" enctype="multipart/form-data">
    <div class="cf" style="font-family: cursive;">
        <label for="file"><h4><br><br>Account Details:</h4></label><br><br>
    </div>
        <button type="submit" class="btn btn-outline-light" value="Read" name="Read">Read</button>
</form>
<?php
    $servername = "localhost"; // MySQL server host
    $username = "root"; // MySQL username
    $password = ""; // MySQL password
    $database = "prj_mang"; // Database name
    $conn = new mysqli($servername, $username, $password, $database);
    
    if($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }
if(isset($_POST["Read"])) {
    $sql = "SELECT fullname, usn, batch FROM registration where usn='$USN'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<center>Full Name: " . $row["fullname"] . " <br> 
            USN: " . $row["usn"] . " <br> Batch: " . $row["batch"] . "<br></center>";
        }
    } else {
        echo "0 results";
}
}
?>
      </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="card text-bg-light">
      <div class="card-body">
      <div class="ud">
  <form method="post" action="student.php" enctype="multipart/form-data">
    <div class="cf" style="font-family: cursive;">
        <label for="file"><h4><br><br>Update Account Details:</h4></label><br><br>
    </div>
    <div class="container">

        <div class="mb-3">
                <label for="fullname" class="form-label">Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname" required>
              </div>


                <div class="mb-3">
                  <label for="batch" class="form-label">Batch</label>
                  <select class="form-select" id="batch" name="batch" required>
                      <option selected>Select your batch:</option>
                      <option value="2015-2019">2015-2019</option>
                      <option value="2016-2020">2016-2020</option>
                      <option value="2017-2021">2017-2021</option>
                      <option value="2018-2022">2018-2022</option>
                    </select>
                <br></div>

                <div class="mb-3">
                  <label for="newPwd" class="form-label">New Password</label>
                  <input type="password" class="form-control" id="newPwd" name="newPwd" required>
                </div>
                <center>
                <button type="submit" class="btn btn-outline-secondary" name="Update" value="Update">Update</button></center>
</div>
    </form></div>
    <?php
$servername = "localhost"; // MySQL server host
$username = "root"; // MySQL username
$password = ""; // MySQL password
$database = "prj_mang"; // Database name
$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}
if (isset($_POST["Update"])) {
    $newName = $_POST["fullname"];
    $newBatch = $_POST["batch"];
    $newPwd = $_POST["newPwd"];
    
    $sql = "UPDATE registration SET fullname='$newName', batch='$newBatch', password='$newPwd' WHERE usn='$USN'";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>  alert('Account Details Updated Successfully'); </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
      </div>
    </div>
  </div>
</div>
    </center>
    </body>
    </html>
