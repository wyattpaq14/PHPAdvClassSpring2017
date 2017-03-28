<?php

/**
 * Function to establish a database connection
 * 
 * @return PDO Object
 */
function dbconnect() {
    $config = array(
        'DB_DNS' => 'mysql:host=192.168.2.223;port=3306;dbname=PHPAdvClassSpring2017',
        'DB_USER' => 'wyatt',
        'DB_PASSWORD' => '123456'
    );

    try {
        /* Create a Database connection and 
         * save it into the variable */
        $db = new PDO($config['DB_DNS'], $config['DB_USER'], $config['DB_PASSWORD']);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (Exception $ex) {
        /* If the connection fails we will close the 
         * connection by setting the variable to null */
        $db = null;
        $message = $ex->getMessage();
        var_dump($message);
        exit();
    }

    return $db;
}
