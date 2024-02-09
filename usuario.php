<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Usuário</title>
    <style>
        /* Estilos CSS usando o tema "edu-cosmica" */
        body.edu-cosmica {
            background-color: #0C0F1F;
            color: #FFFFFF;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
        }

        .user-info {
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #FFD700;
            color: #0C0F1F;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>

<body class="edu-cosmica">
    <?php

    include_once 'conn.php';
    session_start();

    if (!isset($_SESSION["email"])) {
        header('Location: login.php');
        exit();
    }

    $email = $_SESSION["email"];

    if (isset($_POST["logout"])) {
        session_unset();
        session_destroy();
        header('Location: login.php');
        exit();
    }



    ?>

    <h1>Bem-vindo, <?php echo $email ?></h1>
    <div class="user-info">
        <p>Email: <?php echo $email ?></p>
    </div>
    <form method="post">
        <input type="submit" value="Sair" name="logout">
    </form>

</body>

</html>