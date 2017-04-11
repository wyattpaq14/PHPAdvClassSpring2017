<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
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
                $util->redirect('login.php');
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
        
        
        
        
        
        
        
        
        include './templates/signup.html.php';
        ?>
        <?php include './templates/errors.html.php'; ?>
        <?php include './templates/messages.html.php'; ?>

    </body>
</html>
