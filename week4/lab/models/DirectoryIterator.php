<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // http://php.net/manual/en/class.directoryiterator.php
        //DIRECTORY_SEPARATOR 

        $folder = '../uploads';
        if (!is_dir($folder)) {
            die('Folder <strong>' . $folder . '</strong> does not exist');
        }
        $directory = new DirectoryIterator($folder);
        ?>
        <ol>
            <?php foreach ($directory as $fileInfo) : ?>        
                <?php if ($fileInfo->isFile()) : ?>

                    <li><a href="view.php?asdf=<?php echo $fileInfo->getPathname();?>"><?php echo $fileInfo->getFilename(); ?></a><br /></li>

                <?php endif; ?>
            <?php endforeach; ?>
        </ol>

    </body>
</html>
