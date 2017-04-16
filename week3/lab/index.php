<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
         <?php include './templates/navigation.html.php'; ?><br />
        <div class="container-fluid col-lg-6 col-lg-offset-3">
            <?php
            // put your code here

            include './autoload.php';

            $reg = new Registration();
            $util = new Util();
            $valid = new Validation();

            $errors = [];

            $email = filter_input(INPUT_POST, 'email');
            $pass = filter_input(INPUT_POST, 'password');
            $confirmpass = filter_input(INPUT_POST, 'confirmpassword');

            if ($util->isPostRequest()) {
                if ($reg->signup($email, $pass)) {
                    $util->redirect('../login.php');
                }

                if (!$valid->emailIsValid($email)) {
                    $errors[] = 'Email is not valid!';
                }

                if ($pass !== $confirmpass) {
                    $errors[] = 'Password Missmatch!';
                }

                if (empty($pass)) {
                    $errors[] = 'Pass is not valid!';
                }
                if ($valid->loginExists($email)) {
                    $errors[] = 'Email allready exists!';
                }
            }








            
            ?>
            <?php include './templates/signup.html.php'; ?>
            <?php include './templates/errors.html.php'; ?>
            <?php include './templates/messages.html.php'; ?>
        </div>
    </body>
</html>
