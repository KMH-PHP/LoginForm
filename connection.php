<?php

$sname = "localhost";
$unmae = "root";
$password = "password";

$db_name = "profile_project";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}