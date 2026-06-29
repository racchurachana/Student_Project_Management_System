<?php
session_start();
?>
<html>
<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        form {
            position: relative; top: 200px; left:0; width: 50%; height: 100;
        }
        body {
          background-image: url('student.jpg');  background-size: cover;  background-position: center;
        }
    </style>
</head>
<body>
  <div class="container-fluid">
  <nav class="navbar bg-body-tertiary bg-opacity-75">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Project Management Application</span>
    <a href="register.php" class="btn btn-primary" role="button" data-bs-toggle="button">Register</a>
  </div>
</nav></div>
<div class="container" style="height: 90%; display: flex; justify-content: center;">
<form action="login.php" method="post">
<div class="bg-white p-2 text-dark bg-opacity-75 rounded">
  <h1><center> Login Page</h1></center>
                <div class="mb-3">
                  <label for="usn" class="form-label">USN</label>
                  <input type="text" class="form-control" id="usn" name="usn" required>
                </div>
                
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <center>
                <button type="submit" class="btn btn-primary">Login</button></center>
              </form>   
      </div>         
  </div>
  </body>
</html>
<?php
$servername = "localhost"; // MySQL server host
$username = "root"; // MySQL username
$password = ""; // MySQL password
$database = "prj_mang"; // Database name
$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $usn=$_POST["usn"];
    $password = $_POST["password"]; 
    $sql="SELECT * FROM registration WHERE password='$password' and usn='$usn'";  
    
    $result=$conn->query($sql);
    if($result->num_rows>0){
            $_SESSION["usn"] = $usn;
            
        header('Location: home.php'); 
    } else {
        echo "<script>  alert('Invalid usn / password .'); </script>";
    }
}
?>