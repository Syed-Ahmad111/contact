<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lawyer Category Form</title>
    <link rel="stylesheet" href="form2.css">
</head>
<body>
    <div class="form-container">
        <h2>Lawyer Registration Form</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="name">Lawyer Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="category">Lawyer Category:</label>
            <select id="category" name="category" required>
                <option value="criminal">Criminal</option>
                <option value="civil">Civil</option>
                <option value="family">Family</option>
            </select>

            <label for="photo">Upload Photo:</label>
            <input type="file" id="photo" name="photo" accept="image/*" required>

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>

<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $photo = $_FILES['photo'];

    // Check if the photo is uploaded
    if ($photo['error'] == 0) {
        // Set target directory and file name
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($photo['name']);

        // Check if file is an image
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
        if (in_array($imageFileType, $allowed_types)) {
            // Move the uploaded file to the target directory
            if (move_uploaded_file($photo['tmp_name'], $target_file)) {
                echo "The file " . htmlspecialchars(basename($photo['name'])) . " has been uploaded.";
                echo "<br>Lawyer Name: " . htmlspecialchars($name);
                echo "<br>Lawyer Category: " . htmlspecialchars($category);
                echo "<br><img src='$target_file' alt='Uploaded Photo' width='150'>";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
    } else {
        echo "No file was uploaded.";
    }
}
?>

