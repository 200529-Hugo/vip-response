<?php

$portfolioUrl = __DIR__ . '/';



$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$rando = round(microtime(true));
$newfilename = $rando . '.' . end($temp);
mkdir("compressed/" . $rando);
mkdir("uncompressed/" . $rando);
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $portfolioUrl . 'compressed/' . $rando . '/' . $_FILES["fileToUpload"]["name"]);

$zip = new ZipArchive;
$res = $zip->open('compressed/' . $rando . '/' . $_FILES["fileToUpload"]["name"]);
if ($res === TRUE) {
    $zip->extractTo('uncompressed/' . $rando);
    $zip->close();
} else {
    echo 'ERROR!';
}
?>



<!DOCTYPE html>
<html lang="en" style="height: 100%;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>See file</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    html {
        height: 100%;
    }

    body {
        height: 100%;
        text-align: center;
    }

    iframe {
        align-self: center;
        height: 70%;
        width: 50%;
        flex: 100;
    }

    .buttons{
        display: flex;
    }

    a {
        text-decoration: none;
        color: white;
        font-size: 20pt;
        margin: auto;
    }

    .button {
        background-color: black;
        border-radius: 16px;
        padding: 20px 20px;
        width: fit-content;
    }
</style>

<body>
    <div class="buttons">
        <a href="./index.php">
            <div class="button">
                Go Back
            </div>
        </a>
        <a href="compressed/<?= $rando . '/' . $_FILES["fileToUpload"]["name"] ?>" download>
            <div class="button">
                Download zip
            </div>
        </a>
    </div>



    <br>
    <iframe src="uncompressed/<?= $rando . '/' . $temp[0] ?>/" frameborder="0"></iframe>
</body>

</html>