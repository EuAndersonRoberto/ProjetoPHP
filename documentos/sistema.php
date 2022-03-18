<?php
session_start();
//print_r($_SESSION);
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['email'];
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
    <form>
        <div id="formulario">
            <div id="form_group">
                <table class="table table-dark" id="tabox">
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
                            <th scope="row">1</th>
                            <td><input type="text" class="entradas" name="receita[]" placeholder="Receita"></input></td>
                            <td><input type="text" class="entradas" name="despesa[]" placeholder="Despesa"></input></td>
                            <td><input type="text" class="entradas" name="comentario[]" placeholder="informe aqui!"></input></td>
                            <td><button type="button" class="btn btn-secondary" id="add_novo"> + </button><button type="button" class="btn btn-secondary" id="rmv_novo"> - </button> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </br></br>
        <div class="vstack gap-2 col-md-5 mx-auto">
            <button type="button" class="btn btn-secondary">Salva Alterações</button>
            <button type="button" class="btn btn-outline-secondary">Cancel</button>
        </div>
    </form>
    <script>
        $("#add_novo").click(function() {
            $("#tabox").append('<tr><th scope="row">3</th><td><input type="text" class="entradas" name="receita[]" placeholder="Receita"></input></td><td><input type="text" class="entradas" name="despesa[]" placeholder="Despesa"></input></td><td><input type="text" class="entradas" name="comentario[]" placeholder="informe aqui!"></input></td>                            <td><button type="button" class="btn btn-secondary" id="add_novo"> + </button><button type="button" class="btn btn-secondary" id="rmv_novo"> - </button> </td></tr>');
        })
        $("formulario").on("click", "p", function() {
            $(this).after("<p>Another paragraph! " + (++count) + "</p>");
        });
    </script>
</body>

</html>