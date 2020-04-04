<?php

$user = 'root';
$pass = 'Taran@1234';
$db = 'project';

$db = new mysqli('localhost', $user , $pass, $db) or die("unable");
    echo("conected")
?>