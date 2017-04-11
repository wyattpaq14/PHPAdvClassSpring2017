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
        session_start();
        // put your code here

        include './autoload.php';

        $reg = new Registration();
        $util = new Util();
        $valid = new Validation();

        $errors[] = '';

        $email = filter_input(INPUT_POST, 'email');
        $pass = filter_input(INPUT_POST, 'password');

        if ($util->isPostRequest()) {
            $user_id = $reg->login($email, $pass);
            if ($user_id > 0) {
                $_SESSION["user_id"] = $user_id;
                $util->redirect("admin.php");
            }
            
            
            
            if (!$valid->emailIsValid($email)) {
                $errors[] = 'Email is not valid!';
            }
            
            
            if (empty($pass)) {
                $errors[] = 'Pass is not valid!';
            }
            
            
            
        }
        
        
        include './templates/login.html.php';
        
        
        ?>
        <?php include './templates/errors.html.php'; ?>
        <?php include './templates/messages.html.php'; ?>
    </body>
</html>
