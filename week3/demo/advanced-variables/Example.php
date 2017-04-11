<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Example
 *
 * @author Wyatt Paquin
 */
class Example {

    //put your code here

    public $var = 'Example class text';

    public function sampleFunction($param) {


        echo 'This is the sample function';
    }

}

$egString = 'Example';
$eg = new $egString();


$eg->sampleFunction('$param');

echo "$egString - this is a test <br />";

echo '$egString - this is a test <br />';
