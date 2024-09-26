<?php
$host = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'infobooks';

$dbConn = mysqli_connect($host, $dbUser, $dbPass);
if (!$dbConn) { 
    die('Не може да се осъществи връзка със сървъра.');
}

if (!mysqli_select_db($dbConn, $dbName)) {
    die('Не може да се селектира базата от данни.');
}

mysqli_query($dbConn, "SET NAMES 'UTF8'");
