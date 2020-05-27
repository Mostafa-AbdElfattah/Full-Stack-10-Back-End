<?php

session_start();


$errors = [];

$checklist = [];

$_SESSION;

//Validate Name :

if (!empty($_POST['submitForm']) && empty($_POST['yourname'])) {
    $errors[] = 'Please enter your name';
} else $_SESSION['yourname'] = $_POST['yourname'];

// Validate PassWord :

if (!empty($_POST['submitForm']) && empty($_POST['password'])) {
    $errors[] = 'Please enter your PassWord';
} elseif (!empty($_POST['submitForm']) && (!preg_match("#[0-9]+#", $_POST['password']))) {
    $errors[] = 'Your Password Must Contain At Least 1 Number!';
} else $_SESSION['password'] = $_POST['password'];

// Validate Gender
if (!empty($_POST['submitForm']) && empty($_POST['gender'])) {
    $errors[] = 'Please Select Gender ';
} else $_SESSION['gender'] = $_POST['gender'];



//post Country to view

$_SESSION['country'] = $_POST['country'];




// Validate Mail :

if (!empty($_POST['submitForm']) && empty($_POST['email'])) {
    $errors[] = 'Please enter your Email';
} elseif (!empty($_POST['submitForm']) && (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST['email']))) {
    $errors[] = 'Your Email is Invalid';
} else $_SESSION['email'] = $_POST['email'];

// Validate Phone :

if (!empty($_POST['submitForm']) && empty($_POST['phone'])) {
    $errors[] = 'Please enter your phone';
} else $_SESSION['phone'] = $_POST['phone'];



//Post Birth Date :

$_SESSION['bdate'] = $_POST['bdate'];





//Validate Hobbies :

$_SESSION['checklist'] = $_POST['checklist'];


if (!empty($_POST['submitForm']) && empty($_POST['checklist'])) {
    $errors[] = 'Please Select Hobbies ';
} else {

    for ($i = 0; $i < count($_POST['checklist']); $i++) {
        $checklist[] = $_POST['checklist'][$i];
    }
    $_SESSION['checklist'] = $checklist;
}



// If no errors found redirect page 
if (!empty($_POST['submitForm']) && !count($errors)) {
    header('Location: /view.php');
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Personal Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="testbox">
        <form method="post" enctype="multipart/form-data">
            <div class="banner">
                <h1>Personal Form</h1>
            </div>

            <div>
                <?php
                if (count($errors)) :
                ?>
                    <ul>
                        <?php for ($i = 0; $i < count($errors); $i++) : ?>
                            <li> <?= $errors[$i] ?> </li>
                        <?php endfor; ?>
                    </ul>
                <?php
                endif;
                ?>
            </div>
            <div class="item">
                <p>Name<span class="required">*</span></p>

                <input type="text" name="yourname" placeholder="Enter your Name" value="<?= !empty($_POST['yourname']) ? $_POST['yourname'] : '' ?>" />
            </div>

            <div class="item">
                <p>Password<span class="required">*</span></p>
                <input type="password" name="password" placeholder="Enter Password" />

            </div>




            <div class="question">
                <p>Gender<span class="required">*</span></p>
                <div class="question-answer">
                    <label><input type="radio" name="gender" value="Male" /> <span>Male</span></label>
                    <label><input type="radio" name="gender" value="Female" /> <span>Female</span></label>
                </div>
            </div>



            <div class="item">

                <p>Country<span class="required">*</span></p>
                <select name="country">
                    <option value="Egypt">Egypt</option>
                    <option value="Russia">Russia</option>
                    <option value="Germany">Germany</option>
                    <option value="France">France</option>
                    <option value="USA">USA</option>
                </select>
            </div>


            <div class="item">
                <p>Email<span class="required">*</span></p>
                <input type="text" name="email" value="<?= !empty($_POST['email']) ? $_POST['email'] : '' ?>" />
            </div>


            <div class="item">
                <p>Phone</p>
                <input type="text" name="phone" value="<?= !empty($_POST['phone']) ? $_POST['phone'] : '' ?>" />
            </div>

            <div class="item">
                <label for="bdate">Birth Date <span class="required">*</span></label>
                <input id="bdate" type="date" name="bdate" value="<?= !empty($_POST['bdate']) ? $_POST['bdate'] : '' ?>" />
                <i class="fas fa-calendar-alt"></i>
            </div>




            <div class="question">
                <p>Hobbies:<span class="required">*</span></p>
                <div class="question-answer checkbox-item">
                    <div>
                        <input type="checkbox" value="Reading" id="check_1" name="checklist[]" />
                        <label for="check_1" class="check"><span>Reading</span></label>
                    </div>
                    <div>
                        <input type="checkbox" value="Programing" id="check_2" name="checklist[]" />
                        <label for="check_2" class="check"><span>Programing</span></label>
                    </div>
                    <div>
                        <input type="checkbox" value="Swimming" id="check_3" name="checklist[]" />
                        <label for="check_3" class="check"><span>Swimming</span></label>
                    </div>

                </div>
            </div>




            <div class="btn-block">
                <input class="button" type="reset">
                <input class="button" type="submit" name="submitForm" />

            </div>


        </form>
    </div>
</body>

</html>