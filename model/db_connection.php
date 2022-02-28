<?php

// Méthode procédurale
//$db = mysqli_connect("localhost","root","root1234","mycinema");
$db = mysqli_connect("localhost","test","","mycinema");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
