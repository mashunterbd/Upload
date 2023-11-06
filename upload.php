<?php
if (isset($_FILES['file'])) {
    $upload_dir = __DIR__ . '/uploads/';  // Specify the absolute path to the 'uploads' directory
    $uploaded_file = $upload_dir . basename($_FILES['file']['name']);
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploaded_file)) {
        echo "File uploaded successfully!";
    } else {
        echo "File upload failed.";
    }
}
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select a file to upload:
    <input type="file" name="file" id="file">
    <input type="submit" value="Upload File" name="submit">
</form>
