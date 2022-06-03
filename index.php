<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="text-center" action="upload.php" method="post" enctype="multipart/form-data">
        <strong>Select zip to upload:</strong><br>
        <input type="file" name="fileToUpload" id="fileToUpload" accept=".zip,.rar,.7zip" required>
        <br><br>
        <input type="submit" class="btn btn-success" value="Upload zip" name="submit">
    </form>
</body>
</html>