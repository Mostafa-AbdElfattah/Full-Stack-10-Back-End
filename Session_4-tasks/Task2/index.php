<?php

session_start();
$errors = [];
$store = ['mail' => 'admin@gmail.com', 'pass' => 'S1234s12'];
if (!empty($_POST['form']) && empty($_POST['mail'])) {
    $errors[] = 'Please enter you Email';
}
if (!empty($_POST['form']) && empty($_POST['password'])) {
    $errors[] = 'Please enter you Password';
}
if (!empty($_POST['form']) && count($errors) === 0) {

    $email = $_POST['mail'];
    $password = $_POST['password'];

    if (($email == $store['mail']) && ($password == $store['pass'])) {
        $_SESSION["mail"] = $email;
        header("location: upload-photo.php ");
    } else {
        $errors[]  = ('Invalid Data');
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="login">
        <h1>Login</h1>
        <form method="post">
            <input type="text" name="mail" placeholder="Email" />
            <input type="password" name="password" placeholder="Password" />
            <input class="btn btn-primary btn-block btn-large" type="submit" name="form" value="Sign In" />


            <?php
            if (count($errors)) :
            ?>
                <div class="">
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