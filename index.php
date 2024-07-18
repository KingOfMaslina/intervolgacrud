<!DOCTYPE html>
<html>
<meta charset="utf-8" />
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h3>Добавление комментария</h3>
<form action="create.php" method="post">
    <p>Имя:
    <input type="text" name="name" /></p>
    <p>Комментарий:
    <textarea name = "text"></textarea>
    <input type="submit" value="Добавить">
</form>
<?php
//подключение к бд
$conn = new mysqli("localhost", "root", "", "volgacrud");
if($conn->connect_error){
die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT * FROM comment";
if($result = mysqli_query($conn, $sql))
   //вывод записей
   foreach($result as $row){
    echo "<div class = 'comment'>";
    echo "<a class = 'name'>" . $row["name"] . "</a>";
    echo "<a class = 'text'>" . $row["text"] . "</a>";
    echo "</div>";
}
?>

</body>
</html>