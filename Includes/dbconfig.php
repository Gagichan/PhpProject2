<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'gagiphp';

$bp= mysqli_connect($host, $user, $password, $database);
if(!$bp){
    die("ERROR while trying to connect to database server");
}