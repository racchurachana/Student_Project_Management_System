<?php
include("db.php");
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $concept = $_POST["concept"];
    $category = $_POST["category"];
    $desc = $_POST["desc"];
    $gd=$_POST["gd"];
    $usn = $_POST['usn'];

    // Upload image
    $image_path = null;
    if ($_FILES["file"]["error"] == 0) {
        $uploadsDir = "uploads/";
        if (!is_dir($uploadsDir)) { mkdir($uploadsDir, 0755, true); }
        $imageName = uniqid() . "_" . basename($_FILES["file"]["name"]);
        $imagePath = $uploadsDir . $imageName;
        move_uploaded_file($_FILES["file"]["tmp_name"], $imagePath);
        $image_path = $imagePath;
    }
    // Insert product into the database
    $sql = "INSERT INTO fileupload (concept,category,description,gd,file,usn) VALUES ('$concept', '$category', '$desc','$gd','$image_path','$usn')";
    $result = $conn->query($sql);
}

$conn->close();
header("Location: upload.php");
?>
