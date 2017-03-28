<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function isValidEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
        return true;
    }
    return false;
}

function isValidZip($zip) {

    $zipRegex = '/^[0-9]{5}$/';

    if (!preg_match($zipRegex, $zip)) {
        return false;
    } else if (preg_match($zipRegex, $zip)) {
        return true;
    }
}

function isValidDate($date) {
    $testDate = $date;
    $test_arr = explode('-', $testDate);

    if (checkdate($test_arr[1], $test_arr[2], $test_arr[0])) {
        return true;
    } else {
        return false;
    }
}

?>