<?php

/**
 * Description of LoginResource
 *
 * @author 001305794
 */
class LoginResource extends DBSpring {

    public function login($serverData) {

        $stmt = $this->getDb()->prepare("SELECT * FROM users WHERE email = :email");
        $binds = array(
            ":email" => $serverData['email']
        );

        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($serverData['password'], $results['password'])) {

                return true;
            }
        }
        return false;
    }

}
