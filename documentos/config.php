
<?php
$dbhost = 'localhost:3306';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'form_usuario';

$conexao = new mysqli($dbhost, $dbUsername, $dbPassword, $dbName);
/*if ($conexao->connect_errno) {
    echo "Erro: Falha na conexão!";
} else {
    echo " Conexao efetuada com sucesso!";
}*/

