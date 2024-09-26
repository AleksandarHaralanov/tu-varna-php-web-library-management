<?php
include "config.php";

$query = "SELECT * FROM books WHERE publisher = 'Просвета'";
$result = mysqli_query($dbConn, $query);
$count = mysqli_num_rows($result);

if ($count > 0) {
    echo "<table border='2'>
            <tr>
                <th>Номер</th>
                <th>Заглавие</th>
                <th>Автор</th>
                <th>Издателство</th>
                <th>Година на издаване</th>
            </tr>";

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['title'] . "</td>
                <td>" . $row['author'] . "</td>
                <td>" . $row['publisher'] . "</td>
                <td>" . $row['year'] . "</td>
              </tr>";
    }

    echo "<tr>
            <td align='center' colspan='5'><a href='delete1.php'>Изтриване</a></td>
          </tr>
          </table>";
} else {
    echo "Няма книги от издателство: Просвета";
}
?>
