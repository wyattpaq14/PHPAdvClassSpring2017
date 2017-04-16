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
        include './autoload.php';
        $util = new Util();
        include './templates/acess-required.html.php';


        echo "<p> Your user id is: " . $_SESSION['user_id'] . "</p><br />";
        echo "<p> Your email is: " . $_SESSION['user_email'] . "</p><br />";

        if ($util->isPostRequest()) {

            $util->logout();
            $util->redirect('login.php');
        }
        ?>

    </body>
</html>
