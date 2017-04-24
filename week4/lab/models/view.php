<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>View</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <?php include '../templates/navigation.html.php'; ?>
        <?php
        // put your code here

        /*
         * http://php.net/manual/en/ref.filesystem.php
         * http://php.net/manual/en/ref.dir.php
         * http://php.net/manual/en/book.filesystem.php
         * http://php.net/manual/en/class.directoryiterator.php
         * 
         */
        $file_path = filter_input(INPUT_GET, 'asdf');

        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $type = $finfo->file($file_path);
        $extension = '';
        ?>
        <p>I am a view page! your file is <a href="<?php echo $file_path; ?>" download>link</a></p>
        <p>I am a view page! your file is <?php echo filesize($file_path); ?> bytes</p>

        <?php
        $finfo = new SplFileInfo($file_path);


        $pathinfo = pathinfo($file_path);
        $extension = $pathinfo['extension'];
        ?>


        <p>I am a view page! your file date is <?php echo date("l F j, Y, g:i a", $finfo->getMTime()); ?></p>
        <p>I am a view page! your file type is <?php echo $extension; ?></p>

        <?php if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif'): ?>

            <img src="<?php echo $file_path; ?>" />

        <?php endif ?>


        <?php if ($extension == 'txt'): ?>
            <!--    retreive file information with spl-->
            <?php $txtFile = new SplFileObject($file_path, "r"); ?>
            <textarea><?php echo $txtFile->fread($txtFile->getSize()); ?></textarea>
        <?php endif ?>

        <?php if ($extension == 'pdf' || $extension == 'html' || $extension == 'htm'): ?>

            <iframe src="<?php echo $file_path; ?>" />
        <?php endif ?>

    </body>
</html>
