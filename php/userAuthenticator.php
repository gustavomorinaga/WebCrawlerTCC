<?php
session_start();
include('conexao.php');

if (!empty($_POST) && empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: ../index.html');
    exit();
}

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select `id`, `nome` from `usuario` where `email` = '{$email}' and `senha` = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header('Location: verifica_login.php');
    exit();
} else {
    header('Location: login.php');
    exit();
}
