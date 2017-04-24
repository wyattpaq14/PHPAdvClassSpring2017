<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Upload</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <?php include './templates/navigation.html.php'; ?>
        <?php
        // put your code here

        /*
         * http://php.net/manual/en/ref.filesystem.php
         * http://php.net/manual/en/ref.dir.php
         * http://php.net/manual/en/book.filesystem.php
         * http://php.net/manual/en/class.directoryiterator.php
         * 
         */

        include './models/upload-form.php';
        ?>

    </body>
</html>
