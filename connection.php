<?php

$mysqli = mysqli_connect("localhost", "root", "", "os007");
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
error_reporting(E_ALL);
ini_set('display_errors','Off');

?>