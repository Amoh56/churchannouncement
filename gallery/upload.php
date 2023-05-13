<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['image'])) {
        $image = $_FILES['image'];
        $imagePath = 'gallery/' . $image['name'];

        if (move_uploaded_file($image['tmp_name'], $imagePath)) {
            // Image uploaded successfully
            http_response_code(200);
        } else {
            // Failed to move uploaded image
            http_response_code(500);
        }
    } else {
        // No image uploaded
        http_response_code(400);
    }
} else {
    // Invalid request method
    http_response_code(405);
}
?>
