<?php
session_start();
include("conexao.php");
header('Content-type: text/html; charset=utf-8');

$nome = mysqli_real_escape_string ($conexao, trim($_POST['nome']));
$sobrenome = mysqli_real_escape_string($conexao, trim($_POST['sobrenome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['emailRegister']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senhaRegister'])));
$confirmaSenha = mysqli_real_escape_string($conexao, trim(md5($_POST['confirmSenhaRegister'])));
$telefone = mysqli_real_escape_string($conexao, $_POST['Phone']);
$feedback = mysqli_real_escape_string($conexao, trim($_POST['feedback']));

$sql = "select count(*) as total from `usuario` where `email` = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1) {
    $_SESSION['usuario_existe'] = true;
    header('Location: login.php');
    exit();
}

$sql = "INSERT INTO usuario (nome, sobrenome, email, telefone, senha, feedback, data_cadastro) VALUES('$nome', '$sobrenome', '$email', '$telefone', '$senha', '$feedback', NOW())";

if ($senha == $confirmaSenha){
    if ($conexao->query($sql) === true) {
        $_SESSION['status_cadastro'] = true;
    }
}else{
    $_SESSION['senha_incorreta'] = true;
    header('Location: login.php');
    exit();
}

$conexao->close();

header('Location: login.php');
exit();