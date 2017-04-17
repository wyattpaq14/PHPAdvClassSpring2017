<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Page</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid col-lg-6 col-lg-offset-3"> 
            <?php
            session_start();
            include './autoload.php';
            $util = new Util();
            include './templates/acess-required.html.php';

            if (isset($_SESSION)) {
                echo "<p> Your user id is: " . $_SESSION['user_id'] . "</p><br />";
                echo "<p> Your email is: " . $_SESSION['user_email'] . "</p><br />";
            }



            if ($util->isPostRequest()) {

                $util->logout();
                $util->redirect('login.php');
            }
            ?>
        </div>
    </body>
</html>
