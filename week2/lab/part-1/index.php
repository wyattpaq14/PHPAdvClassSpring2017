<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here

        include './autoload.php';

        $msg = new Message();

        $msg->addMessage('test', 'This is a test1');
        $msg->addMessage('test2', 'This is a test2');
        $msg->addMessage('test3', 'This is a test3');
        var_dump($msg->getAllMessages());

        $errMsg = new ErrorMessage();

        $errMsg->addMessage('testError1', 'This is a error test 1');
        $errMsg->addMessage('testError2', 'This is a error test 2');
        $errMsg->addMessage('testError3', 'This is a error test 3');

        var_dump($errMsg->getAllMessages());

        $sucessMsg = new SucessMessage();

        $sucessMsg->addMessage('testsucess1', 'This is a sucess test 1');
        $sucessMsg->addMessage('testsucess2', 'This is a sucess test 2');
        $sucessMsg->addMessage('testsucess3', 'This is a sucess test 3');
        ?>
    </body>
</html>
