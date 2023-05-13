<?php
$imageDirectory = 'gallery';
$images = [];

$files = scandir($imageDirectory);
foreach ($files as $file) {
    if ($file !== '.' && $file !== '..') {
        $images[] = [
            'filename' => $file,
            'url' => $imageDirectory . '/' . $file
        ];
    }
}

header('Content-Type: application/json');
echo json_encode($images);
?>
