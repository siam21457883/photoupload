<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Your File</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h1>Upload Your File </h1>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            
            <label for="file">Choose file (JPEG or PNG):</label>
            <input type="file" id="file" name="file" accept=".jpeg, .jpg, .png" required><br><br>
            
            <button type="submit">Upload</button>
        </form>
    </div>
</body>
</html>
