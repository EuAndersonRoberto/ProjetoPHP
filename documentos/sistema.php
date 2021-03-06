<?php
session_start();
//print_r($_SESSION);
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['email'];

if (isset($_POST['submit'])) {
    include_once('config.php');

    $receita = $_POST['receita'];
    $despesa = $_POST['despesa'];
    $comentario = $_POST['comentario'];

    $result = mysqli_query($conexao, "INSERT INTO controller(receita,despesa,comentario) VALUES ('$receita','$despesa','$comentario')");

}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotroller - Sua Agenda Financeira</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        body {
            background-image: url(../imagens/fin3.jpeg);
            background-size: cover;
            text-align: center;
        }

        .table-bg {
            background: rgba(0, 0, 0, 0.5);
            color: white;
        }

        .rmv_novo {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            width: 36.95px;
            height: 38px;
            vertical-align: middle;
            border: 1px solid #6c757d;
            cursor: pointer;
            outline: none;
        }
    </style>


</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="./sair.php">
                <img src="../imagens/fin6.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                HOME.
            </a>
        </div>
    </nav>
    <?php
    echo "<h1>Bem-vindo (a): <u>$logado</u></h1>";
    ?>
    <form action="sistema.php" method="POST">
        <div id="formulario" class="m-5">
            <div class="form_group">
                <table class="table table-bg" id="tabox">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">RECEITA</th>
                            <th scope="col">DESPESA</th>
                            <th scope="col">COMENTARIO</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">#</th>
                            <td><input type="text" class="entradas" name="receita" placeholder="Receita"></input></td>
                            <td><input type="text" class="entradas" name="despesa" placeholder="Despesa"></input></td>
                            <td><input type="text" class="entradas" name="comentario" placeholder="informe aqui!" required></input></td>
                            <td><input type="submit" name="submit" id="submit"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </br></br>
        <div class="vstack gap-2 col-md-5 mx-auto">
            <button type="submit" class="btn btn-secondary" name="submit">Salva Altera????es</button>
            <button type="button" class="btn btn-secondary">Cancel</button>
        </div>
    </form>
    <script>
        
    </script>
</body>

</html>