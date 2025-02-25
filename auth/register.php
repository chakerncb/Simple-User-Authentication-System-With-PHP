<?php
require_once('../config/db.php');

$user = [
    'Fname' => $_POST['Fname'],
    'email' => $_POST['email'],
    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
];


$sql = "SELECT * FROM users";
$result = $conn->query($sql);

session_start();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($user['email'] == $row["email"]) {
            $_SESSION['Fname'] = $row["Fname"];
            $_SESSION['alert_danger'] = "Email already exists";
            header('Location: ../register.php');
            exit();
        } else if ($user['Fname'] == $row["Fname"]) {
            $_SESSION['Fname'] = $row["Fname"];
            $_SESSION['alert_danger'] = "Name already exists";
            header('Location: ../register.php');
            exit();
        }
    }
}

$sql = "INSERT INTO users (Fname, email, password) VALUES ('{$user['Fname']}', '{$user['email']}', '{$user['password']}')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['alert_success'] = "Account created successfully !";
    header('Location: ../login.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>