<?php
$dbConn = mysqli_connect('localhost', 'root', '');

if (!$dbConn) { 
    die('Не може да се осъществи връзка със сървъра!');
}

$sql = "CREATE DATABASE IF NOT EXISTS infobooks";

if (!mysqli_query($dbConn, $sql)) {
    die("Грешка при създаването!<br>");
}

if (!mysqli_select_db($dbConn, 'infobooks')) {
    die("Не може да се селектира базата от данни:<br>");
}

$sql = "CREATE TABLE IF NOT EXISTS books (
    id INT(10) NOT NULL AUTO_INCREMENT,
    title VARCHAR(150) DEFAULT NULL,
    author VARCHAR(50) DEFAULT NULL,
    publisher VARCHAR(50) DEFAULT NULL,
    year YEAR DEFAULT NULL,
    PRIMARY KEY(id)
) ENGINE=INNODB DEFAULT CHARSET=utf8";

$result = mysqli_query($dbConn, $sql);
if (!$result) {
    die("Грешка при свръзването на таблицата!");
}
