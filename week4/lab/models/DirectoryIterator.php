<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Uploads</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>

        <?php include '../templates/navigation.html.php'; ?>
        <?php
        // http://php.net/manual/en/class.directoryiterator.php
        //DIRECTORY_SEPARATOR 
        include '../autoload.php';

        $folder = '../uploads';
        if (!is_dir($folder)) {
            die('Folder <strong>' . $folder . '</strong> does not exist');
        }

        $util = new Util();

        $file = filter_input(INPUT_POST, 'file');


        if (is_file($file)) {
            chdir($folder);
            unlink($file);
            $util->redirect("../index.php");
        }

        $directory = new DirectoryIterator($folder);
        ?>
        <ol>
            <?php foreach ($directory as $fileInfo) : ?>        
                <?php if ($fileInfo->isFile()) : ?>

                    <li><a href="view.php?asdf=<?php echo $fileInfo->getPathname(); ?>"><?php echo $fileInfo->getFilename(); ?></a>

                        <form action='#' method="POST">
                            <input type="hidden" name="file" value="<?php echo $fileInfo->getPathname(); ?>">
                            <input type="submit" name="submit" value="Delete" />

                        </form>
                    </li>

                <?php endif; ?>
            <?php endforeach; ?>
        </ol>

    </body>
</html>
