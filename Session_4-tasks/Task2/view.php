<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="photo-view">
        <span class="img-cont">

            <?php
            session_start();
            $img = $_FILES['img']['tmp_name'];
            $tmp = file_get_contents($img);
            echo ' <img src="data:image/jpeg;base64,' . base64_encode($tmp) . ' " class="img-view">';
            ?>
        </span>

    </div>
    <div class="mail-div">
        <h1 class="upload-text">Email: <?= $_SESSION["mail"]; ?></h1>
    </div>

</body>

</html>