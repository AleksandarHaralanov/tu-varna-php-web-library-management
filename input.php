<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input</title>
</head>
<body>
    <form action="" method="POST">
        <pre>
            Заглавие:          <input type="text" name="title" required>
            Автор:               <input type="text" name="author" required>
            Издателство:    <input type="text" name="publisher" required>
            Година:             <input type="text" name="year" required>
            <input type="submit" name="submit" value="Въведи">
        </pre>
    </form>
    <?php
    include 'config.php';

    if (isset($_POST["submit"])) {
        $title = $_POST["title"];
        $author = $_POST["author"];
        $publisher = $_POST["publisher"];
        $year = $_POST["year"];

        if (!empty($title) && !empty($author) && !empty($publisher) && !empty($year)) {
            $sql = "INSERT INTO books (title, author, publisher, year) VALUES ('$title', '$author', '$publisher', '$year')";
            $result = mysqli_query($dbConn, $sql);

            if (!$result) {
                die('Грешка!');
            }
            echo "Добавихте един запис!";
        } else {
            echo "Не сте въвели всички данни!";
        }
    }
    ?>
</body>
</html>
