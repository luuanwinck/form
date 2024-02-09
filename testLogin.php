<?php
include_once 'conn.php';

function xss($data)
{
    return htmlspecialchars(trim(stripslashes($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST"&& !empty($_POST["email"]) && !empty($_POST["senha"])) {
    $email = xss($_POST["email"]);
    $senha = xss($_POST["senha"]);
    
    $sql = "SELECT * FROM cadastro WHERE email = ? AND senha = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $email, $senha);
    $stmt->execute();
    $result = $stmt->get_result();


    if ($result->num_rows > 0) {
        session_start();
        $_SESSION["email"] = $email;
        header('Location: usuario.php');
        exit();
    } else {
        header('Location: login.php');
        exit();
    }

    $stmt->close();
    $conn->close();
}
