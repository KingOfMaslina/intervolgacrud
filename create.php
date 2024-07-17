<?php
if (isset($_POST["name"]) && isset($_POST["text"])) {
    //подключение к БД
    $conn = mysqli_connect("localhost", "root", "", "volgacrud");
    if (!$conn) {
      die("Ошибка: " . mysqli_connect_error());
    }
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $text = mysqli_real_escape_string($conn, $_POST["text"]);
    //SQL Запрос на добавление
    $sql = "INSERT INTO comment (name, text) VALUES ('$name', '$text')";
        if(mysqli_query($conn, $sql)){
        echo "Данные успешно добавлены";
        header("Location: index.php");
    } else{
        echo "Ошибка: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>