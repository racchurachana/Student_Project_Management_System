<?php
session_start();
if (!isset($_SESSION["usn"])) {
    header("Location: login.php");
    exit();
}
?>
<?php
include("db.php");

$usn=$_SESSION["usn"];
// Read Operation - Fetch product data
$sql = "SELECT * FROM fileupload where   category  like '%CN%' ";
$result = $conn->query($sql);

// Display products
$products = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

$conn->close();
?>
<html>
<head>
    <title>CN Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<style>
    .nav-link {
          color: rgb(126 41 4 / 86%);
        }
        body {
          background-image: url('upload.jpg');   background-size: cover;  background-position: center;
        }
        </style>
<body>
<nav class="navbar" style="background-color: #1e2081;">
  <div class="container-fluid">
    <a class="navbar-brand" style="font-size: large"><b><font color="white">Adichunchanagiri Institute Of Technology</font></b></a>
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

<div class="container mt-5">
<center><h2><em><font color="brown">File List</font></em></h2><br></center>
    <!-- Table to display products -->
    <table class="table mt-3">
        <thead>
        <tr>
            <th>Concept</th>
            <th>Category</th>
            <th>Description</th>
            <th>File</th>
            <th>Google Drive Link</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product['concept']; ?></td>
                <td><?php echo $product['category']; ?></td>
                <td><?php echo $product['description']; ?></td>
                <td><?php  $my_file =  $product['file'];  echo  " <a href='$my_file'  target='_blank'> $my_file</a>";  ?></td>
                <td><?php  $mylink =  $product['gd'];  echo  " <a href='$mylink'  target='_blank'> $mylink  </a>";  ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>