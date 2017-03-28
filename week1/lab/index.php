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
            include './models/dbconnect.php';
            include './models/util.php';
            include './models/valdation.php';
            include './templates/errors.html.php';
            include './models/CRUD.php';
            
            

            //

            $fullname = filter_input(INPUT_POST, 'fullname');
            $email = filter_input(INPUT_POST, 'email');
            $addressline1 = filter_input(INPUT_POST, 'addressline1');
            $city = filter_input(INPUT_POST, 'city');
            $state = filter_input(INPUT_POST, 'state');
            $zip = filter_input(INPUT_POST, 'zip');
            $birthday = filter_input(INPUT_POST, 'birthday');
            
            
            //call function that returns list of all the states
            $states = returnStates();

            //pulls all the addresses in DB 
            $addresses = readAllAddress();

            $errors = [];

            if (isPostRequest()) {


                if (empty($fullname)) {
                    $errors[] = 'Full Name is required!';
                }

                if (!isValidEmail($email)) {
                    $errors[] = 'Email is not valid!';
                }

                if (empty($addressline1)) {
                    $errors[] = 'Address is not valid!';
                }

                if (empty($city)) {
                    $errors[] = 'City is not valid!';
                }
                if (empty($state)) {
                    $errors[] = 'State is not valid!';
                }

                if (!isValidZip($zip)) {
                    $errors[] = 'Zip is not valid!';
                }

                if (!isValidDate($birthday)) {
                    $errors[] = 'Birthday is not valid!';
                }

                if (count($errors) == 0) {
                    createAddress($fullname, $email, $addressline1, $city, $state, $zip, $birthday);
                    $message = "Address has been added!";


                    //clear variables on completion, didnt know of an easier way to do this
                    $email = "";
                    $fullname = "";
                    $addressline1 = "";
                    $city = "";
                    $state = "";
                    $zip = "";
                    $birthday = "";
                }
            }
            ?>
            
            
            
            <?php include './templates/errors.html.php'; ?>
            <?php include './templates/messages.html.php'; ?>
            <?php include './templates/add-address.html.php'; ?>

        </div>
    </body>
</html>
