<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['resume'])) {
    $uploads_dir = 'uploads/';
    if (!is_dir($uploads_dir)) {
        mkdir($uploads_dir, 0777, true);
    }

    $tmp_name = $_FILES['resume']['tmp_name'];
    $name = basename($_FILES['resume']['name']);
    $upload_file = $uploads_dir . $name;

    if (move_uploaded_file($tmp_name, $upload_file)) {
        echo "The file ". htmlspecialchars($name) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    echo "No file uploaded.";
}
?>
