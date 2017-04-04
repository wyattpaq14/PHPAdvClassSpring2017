<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Message
 *
 * @author Wyatt Paquin
 */
class Message implements IMessage {

    //put your code here

    protected $messages = [];

    public function addMessage($key, $msg) {
        $this->messages[$key] = $msg;
    }

    public function getAllMessages() {
        return $this->messages;
    }

    public function removeMessage($key) {
        //splice, set to null
        $this->messages[$key] = null;
    }

}
