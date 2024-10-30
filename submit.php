<?php

session_start();

if (!isset($_SESSION['messages'])) {
    $_SESSION['messages'] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (!empty($name) && !empty($email) && !empty($message)) {
        $_SESSION['messages'][] = [
            'name' => $name,
            'email' => $email,
            'message' => $message,
        ];
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['error'] = "Please fill all fields.";
        header("Location: index.php");
        exit();
    }
}
