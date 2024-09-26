<?php
include "config.php";

$query = "DELETE FROM books WHERE publisher = 'Просвета'";
mysqli_query($dbConn, $query);

$query = "SELECT * FROM books";
$result = mysqli_query($dbConn, $query);

if ($result) {
    echo "<ul>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<li>" . $row['title'] . ", " . $row['author'] . ", " . $row['publisher'] . ", " . $row['year'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "Няма налични данни!";
}
echo "<br><br><a href='index.php'>Начална страница</a>";
?>
