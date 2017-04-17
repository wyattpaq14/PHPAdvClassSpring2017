<?php

/**
 * Description of util
 *
 * @author GFORTI
 */
class Util extends DB {

    /**
     * A method to check if a Post request has been made.
     *    
     * @return boolean
     */
    public function __construct() {
        $dbConfig = array(
            "DB_DNS" => 'mysql:host=localhost;port=3306;dbname=PHPAdvClassSpring2017',
            "DB_USER" => 'root',
            "DB_PASSWORD" => ''
        );
        parent::__construct($dbConfig);
    }

    public function isPostRequest() {
        return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
    }

    public function logout() {
        unset($_SESSION);
        session_destroy();
    }

    public function getEmailByUserID($userID) {

        $db = $this->getDB();
        $stmt = $db->prepare("SELECT email FROM USERS WHERE USER_ID = :email");

        $binds = array(
            ":email" => $userID
        );

        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetch(PDO::FETCH_ASSOC);


            return $results["email"];
        }

        return 0;
    }

    /**
     * Generate link.
     * @param string $page target page
     * @param array $params page parameters
     * 
     * @return string
     */
    public function createLink($page, array $params = array()) {
        return $page . '?' . http_build_query($params);
    }

    /**
     * Redirect to the given page.
     * @param type $page target page
     * @param array $params page parameters
     * 
     * @return void
     */
    public function redirect($page, array $params = array()) {
        header('Location: ' . $this->createLink($page, $params));
        die();
    }

    /**
     * Get all values from a post form.
     * 
     * @return array
     */
    public function getPostValues() {
        return filter_input_array(INPUT_POST);
    }

    /**
     * Get value of the URL param.
     * 
     * @return string
     */
    public function getUrlParam($name) {
        return filter_input(INPUT_GET, $name);
    }

}
