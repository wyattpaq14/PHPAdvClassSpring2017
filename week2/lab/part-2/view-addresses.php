<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    </head>
    <body>
        <?php include './templates/navigation.html.php'; ?>
        <div class="container-fluid col-lg-6 col-lg-offset-3">
            <?php
            // put your code here
            include './models/util.php';
            include './templates/errors.html.php';
            include './autoload.php';
            
            //create new instance of Crud not sure if my other CRUD instance still exists?
            $crud = new Crud();
            $addresses = $crud->readAllAddress();
            

            include './templates/view-address.html.php';
            ?>


        </div>
    </body>
</html>
