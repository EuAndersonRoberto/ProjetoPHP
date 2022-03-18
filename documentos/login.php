<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuário</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: url(../imagens/fin2.jpeg);
            background-size: cover;

        }

        div {
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 90px;
            border-radius: 22px;
            color: white;
        }

        input {
            padding: 20px;
            border: none;
            outline: none;
            border-radius: 22px;
        }

        .inputsubmit {
            padding: 10px;
            background-color: #D3D3D3;
            border: none;
            border-radius: 7px;
            outline: none;
            width: 100%;

        }

        .inputsubmit:hover {
            background-color: #4F4F4F;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <a href="home.php">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="teste_login.php" method="POST">
            <input type="text" name="email" placeholder="e-mail"><br /><br>
            <input type="password" name="senha" placeholder="Senha"></br></br>
            <input type="submit" class="inputsubmit" name="submit" value="Enviar">
        </form>
    </div>

</body>

</html>