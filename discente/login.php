<?php
session_start();
include '../functions/connect_db.php';
if (empty($_POST['email']) || empty($_POST['senha'])) {
    header('location: ../login.php');
    exit();
}

$email = mysqli_real_escape_string($connect, $_POST['email']);
$senha = mysqli_real_escape_string($connect, $_POST['senha']);

$query = "SELECT * from aluno where email_aluno = '{$email}' and senha_aluno = md5('{$senha}')";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
$row = mysqli_num_rows($result);
$dados = mysqli_fetch_assoc($result);

if ($row == 1) {
    $_SESSION['id_aluno'] = $dados["id_aluno"];
    $_SESSION['nome_aluno'] = $dados["nome_aluno"];
    $_SESSION['email_aluno'] = $dados["email_aluno"];
    $_SESSION['foto_aluno'] = $dados["foto_aluno"];
    header('location: perfil.php');
    exit();
} else {
    header('location: ../login.php');
    exit();
}
