<html>
<head>
    <title>Registration Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        form {
            position: relative; top: 60px; left:0; width: 50%; height: 100;
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
    <span class="navbar-brand mb-0 h1">GSC College</span>
    <a href="login.php" class="btn btn-primary" role="button" data-bs-toggle="button">Login</a>
  </div>
</nav></div>
<div class="container" style="height: 90%; display: flex; justify-content: center;">
<form action="register.php" method="post">
<div class="bg-white p-2 text-dark bg-opacity-75 rounded">
  <h1><center> Registration Page</h1></center>
              <div class="mb-3">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname" required>
              </div>

                <div class="mb-3">
                  <label for="usn" class="form-label">USN</label>
                  <input type="text" class="form-control" id="usn" name="usn" required>
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
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <center>
                <button type="submit" class="btn btn-primary">Register</button></center>
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
    $fname=$_POST["fullname"];
    $usn=$_POST["usn"];
    $batch=$_POST["batch"];
    $password= $_POST["password"] ; //  password_hash($_POST["password"], PASSWORD_BCRYPT);
    $sql="SELECT * FROM registration WHERE usn='$usn'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        echo "<script>  alert('Usn is already registered. Please login.');</script>";
    }
    else
    {
        $insertQuery="INSERT INTO registration(fullname,usn,batch,password) VALUES ('$fname','$usn', '$batch', '$password')";
        if($conn->query($insertQuery)==TRUE)
        {
            echo "<script>  alert('Registeration successfull. Please login'); </script>";
        }
        else {
            echo "Error: ".$insertQuery. "<br>".$conn->error;
        }
    }
}
?>