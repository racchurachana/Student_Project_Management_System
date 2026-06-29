<?php
session_start();
if (!isset($_SESSION["usn"])) {
    header("Location: login.php");
    exit();
}

?>

<?php
include("db.php");
$USN=$_SESSION['usn'];
// Read Operation - Fetch product data
$sql = "SELECT * FROM fileupload where usn='$USN'";
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
    <title>Upload Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<style>
    .nav-link {
          color: rgb(126 41 4 / 86%);
        }
        body {
          background-image: url('upload.jpg');  background-size: cover;  background-position: center; 
        }
        </style>
<body>
<nav class="navbar" style="background-color: #89D2EA;">
  <div class="container-fluid">
    <a class="navbar-brand" style="font-size: large"><b><font color="white">Project Management System</font></b></a>
    <form>
      <a class="btn btn-outline-info" type="submit" href="knowus.php">Know us!</a>
    </form>
  </div>
</nav>
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="width: 100%; padding: 0;">
  <div class="container-fluid" style="background: #fff3cd;">
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav" style="width: 100%; display: flex; justify-content: space-around;">
        <li class="nav-item"><a class="nav-link" href="home.php">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="project.php">Projects</a></li>
        <li class="nav-item"><a class="nav-link active" href="upload.php">Upload File</a></li>
        <li class="nav-item"><a class="nav-link" href="student.php">Student Details</a></li>
        <li class="nav-item"><span class="badge rounded-pill text-bg-danger"><a class="nav-link text-white" href="logout.php">Logout</a></span></li>
      </ul>
    </div>
  </div>
</nav>
 
<div class="container mt-5">
    <center><h2><em><font color="brown">File List</font></em></h2><br>

    <!-- Button to trigger modal -->
    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#addProductModal">
        Add Files
    </button></center><br><br>

    <!-- Table to display products -->
    <table class="table mt-3">
        <thead>
        <tr>
            <th>Concept</th>
            <th>Category</th>
            <th>Description</th>
            <th>Google Drive Link</th>
            <th>File</th>
            <th>USN</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product['concept']; ?></td>
                <td><?php echo $product['category']; ?></td>
                <td><?php echo $product['description']; ?></td>
                <td><?php  $mylink =  $product['gd'];  echo  " <a href='$mylink' target='_blank'> $mylink </a>";  ?></td>
                <td><?php  $my_file =  $product['file'];  echo  " <a href='$my_file' target='_blank'> $my_file</a>";  ?></td>
                <td><?php echo $product['usn']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Add Product Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" 
     aria-hidden="true">
     <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addProductModalLabel">Add File</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- Form for adding a new product -->
            <form action="add_product.php" method="post" enctype="multipart/form-data">

            <?php $USN=$_SESSION['usn'];?>
                <div class="form-group">
                    <label for="concept">USN</label>
                     <?php echo "<input type='text' , value='$USN', name='usn'> " ?>
                </div><br><br>

                <div class="form-group">
                    <label for="concept">Concept</label>
                    <input type="text" class="form-control" name="concept" required>
                </div><br><br>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-select" id="category" name="category" required>
                      <option selected>Select the subject your project is based on</option>
                      <option value="AIML">AIML</option>
                      <option value="DBMS">DBMS</option>
                      <option value="IOT">IOT</option>
                      <option value="CN">CN</option>
                    </select>
                </div><br><br>
                <div class="form-group">
                    <label for="desc">Description</label>
                    <input type="text" class="form-control" name="desc" min="0" required>
                </div><br><br>
                <div class="form-group">
                    <label for="gd">Google drive link</label>
                    <input type="text" class="form-control" name="gd" min="0" required>
                </div><br><br>
                <div class="form-group">
                    <label for="file">File</label>
                    <input type="file" class="form-control-file" name="file" required>
                </div><br><br>

                <center><button type="submit" class="btn btn-outline-primary">Upload File</button></center>
            </form>
        </div>
    </div>
</div>

</div>
<!-- Bootstrap 5 JS (required for modal) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





