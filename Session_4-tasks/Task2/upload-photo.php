<?php
session_start();
$errors = [];
if (!empty($_POST['upload']) && empty($_FILES['img'])) {
    $errors[] = 'Please Upload Profile Photo';
}

if (!empty($_POST['upload']) && count($errors) === 0) {
    header("location: view.php ");
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="file-div">
        <form method="post" action="view.php" enctype="multipart/form-data">
            <h1 class="upload-text">Upload Profile Photo</h1>
            <h3 class="upload-text accept-text">Only Accept  (.png) </h3>
            <input class="file" type="file"  name="img">
            <input class="btn btn-primary btn-block btn-large" type="submit" name="upload" value="upload">


            <?php
            if (count($errors)) :
            ?>
                <div>
                    <ul>
                        <?php for ($i = 0; $i < count($errors); $i++) : ?>
                            <li class="error"> <?= $errors[$i] ?> </li>
                        <?php endfor; ?>
                    </ul>
                </div>
            <?php
            endif;
            ?>

        </form>
    </div>
</body>

</html>