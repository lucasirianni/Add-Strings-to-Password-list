#!/usr/bin/php
<?php
include 'password_list.txt';
include 'mycharset_with_kali_crunch.txt';

$lines=file('password_list.txt');
$additions=file('mycharset_with_kali_crunch.txt');

foreach($lines as $start) {
    foreach($additions as $end) {
        file_put_contents('newPasswords2.txt',trim($start).trim($end) ."\r\n", FILE_APPEND); 

    }
}
?>

