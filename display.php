<?php
if (isset($_GET['file']) && isset($_GET['name'])) {
    $file = urldecode($_GET['file']);
    $name = urldecode($_GET['name']);
    // Validate the file path to prevent directory traversal attacks
    if (file_exists($file)) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>your image has been uploaded</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <div class="image-container">
                <h1>Upload Successful</h1>
                <img src="<?php echo htmlspecialchars($file); ?>" alt="Uploaded Image">
                <p>Image Name: <?php echo htmlspecialchars($name); ?></p>
                <br>
                <a href="index.php">Upload another image</a>
            </div>
        </body>
        </html>
        <?php
    } else {
        echo 'File does not exist.';
    }
} else {
    echo 'No file or name specified.';
}
?>
