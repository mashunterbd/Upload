<style>
.success-message {
  color: green;
  font-size: 40px;
  font-weight: bold;
  border: 5px solid #000;
  padding: 10px;
  border-radius: 10px;
}
</style>

<?php
if (isset($_POST['submit'])) {
    $upload_dir = __DIR__ . '/uploads/';  // Specify the absolute path to the 'uploads' directory

    foreach ($_FILES['files']['name'] as $key => $filename) {
        if (!empty($filename)) {
            $uploaded_file = $upload_dir . basename($filename);
            if (move_uploaded_file($_FILES['files']['tmp_name'][$key], $uploaded_file)) {
                echo "<p class=\"success-message\">File uploaded successfully: " . $filename . "</p>";
            } else {
                echo "<p class=\"error-message\">File upload failed: " . $filename . "</p>";
            }
        }
    }
}
?>

