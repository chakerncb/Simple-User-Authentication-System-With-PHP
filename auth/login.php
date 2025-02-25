<?php
require_once('../config/db.php');

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

session_start();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($_POST['email'] == $row["email"] && password_verify($_POST['password'], $row["password"])) {
            $_SESSION['Fname'] = $row["Fname"];
            header('Location: ../index.php');
            exit();
        }
    }
    $_SESSION['alert_danger'] = "Email or password is incorrect";
    header('Location: ../login.php');
    exit();
}

$conn->close();
?>