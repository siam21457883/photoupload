<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $file = $_FILES['file'];

    
    $allowedTypes = ['image/jpeg', 'image/png'];

    
    if (in_array($file['type'], $allowedTypes)) {
        
        $uploadDir = 'uploads/';
        
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        
        $uploadFile = $uploadDir . basename($file['name']);

        
        if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
            
            header('Location: display.php?file=' . urlencode($uploadFile) . '&name=' . urlencode($name));
            exit();
        } else {
            echo 'Failed to move uploaded file.';
        }
    } else {
        echo 'Invalid file type. Only JPEG and PNG are allowed.';
    }
} else {
    echo 'Invalid request method.';
}
?>
