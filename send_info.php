<?php
$servername = "localhost";
$username = "goodkett_root";
$password = "KD+qRM;Lz#!+";
$dbname = "goodkett_emails";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$message = $_REQUEST['message'];

$sql = "INSERT INTO user_recall (Name, Phone, Text) VALUES ('$name', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "Запись создана<br>Мы скоро перезвоним Вам!<br><a href='/contacts.html'>Вернуться обратно</a>";
} else {
  echo "Ошибка отправки данных: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>