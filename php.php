<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "dbname";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Пример добавления пользователя
    $stmt = $conn->prepare("INSERT INTO users (name, age) VALUES ('John Doe', 30)");
    $stmt->execute();

    // Пример запроса к базе данных
    $stmt = $conn->prepare("SELECT * FROM users");
    $stmt->execute();

    while ($row = $stmt->fetch()) {
        echo "User ID: " . $row['id'] . ", Name: " . $row['name'] . ", Age: " . $row['age'] . "<br>";
    }
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
