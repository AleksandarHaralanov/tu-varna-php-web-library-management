<?php
include "config.php";

$query = "UPDATE books SET publisher = 'Просвета' WHERE publisher = 'Анубис'";
mysqli_query($dbConn, $query);

$query = "SELECT * FROM books";
$result = mysqli_query($dbConn, $query);
echo "<ul>";

while ($row = mysqli_fetch_array($result)) {
    echo "<li>" . $row['title'] . ", " . $row['author'] . ", " . $row['publisher'] . ", " . $row['year'] . "</li>";
}

echo "</ul><br><br><a href='index.php'>Начална страница</a>";
?>
