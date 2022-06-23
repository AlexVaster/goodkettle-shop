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
$email = $_REQUEST['email'];

$sql = "INSERT INTO emails (Name, Email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "Вы успешно подписались на уведомления от нашего магазина<br><a href='/contacts.html'>Вернуться обратно</a>";
} else {
  echo "Ошибка отправки данных: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>