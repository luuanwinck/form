<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0C0F1F;
            color: #FFFFFF;
            text-align: center;
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
        }

        form {
            margin-top: 20px;
        }

        input[type="email"],
        input[type="password"],
        input[type="submit"] {
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            border: none;
            background-color: #1E1E1E;
            color: #FFFFFF;
        }

        input[type="submit"] {
            background-color: #FFD700;
            cursor: pointer;
        }

        .btn-home {
            position: absolute;
            top: 20px;
            left: 20px;
            background: none;
            border: none;
            color: #FFFFFF;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>

<body>


    <h1>Login</h1>
    <form action="testLogin.php" method="post">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>
        <input type="checkbox" id="lembrar" name="lembrar">
        <label for="lembrar">Lembrar-me</label><br><br>
        <input type="submit" value="Login">
    </form>
    <button class="btn-home" onclick="window.location.href='index.php'">Voltar para Home</button>
</body>

</html>