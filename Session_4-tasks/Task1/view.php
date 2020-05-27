 <?php


    session_start();

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
         <div class="view">
             <div class="banner">
                 <h1>Personal Info </h1>
             </div>

             <div class="item">
                 <?='Your Name is : '. $_SESSION['yourname']; ?>

             </div>
             <div class="item">
                 <?= 'Your Password is : '.$_SESSION['password']; ?>

             </div>

             <div class="item">
                 <?= 'Your Gender is : '. $_SESSION['gender']; ?>

             </div>


             <div class="item">
             <?=  'Your Country is : '.$_SESSION['country']; ?>
            
             </div>

             <div class="item">
             <?=  'Your Email is : '.$_SESSION['email']; ?>
            
             </div>

             <div class="item">
             <?=  'Your Phone is : '.$_SESSION['phone']; ?>
            
             </div>

             <div class="item">
             <?=  'Your Birthdate is : '.$_SESSION['bdate']; ?>
            
             </div>

             <div class="item">
                 <h3> Your Hobbies:</h3>
             <?php
            for ($i = 0; $i < count ($_SESSION['checklist']); $i++) {
            ?>
                <li>
                    <?= $_SESSION['checklist'][$i] ?>
                </li>
            <?php
            }
            ?>
            
             </div>
         </div>

     </div>

 </body>

 </html>