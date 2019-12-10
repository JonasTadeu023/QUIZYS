<?php
session_start();
include '../functions/connect_db.php';
if (empty($_POST['email']) || empty($_POST['senha'])) {
    header('location: ../login.php');
    exit();
}

$email = mysqli_real_escape_string($connect, $_POST['email']);
$senha = mysqli_real_escape_string($connect, $_POST['senha']);

$query = "SELECT * from professor where email_proff = '{$email}' and senha_proff = md5('{$senha}')";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
$row = mysqli_num_rows($result);
$dados = mysqli_fetch_assoc($result);

if ($row == 1) {
    $_SESSION['id_proff'] = $dados['id_proff'];
    $_SESSION['nome_proff'] = $dados['nome_proff'];
    $_SESSION['email_proff'] = $dados['email_proff'];
    $_SESSION['foto_proff'] = $dados['foto_proff'];
    $_SESSION['disciplina_proff'] = $dados['disciplina_proff'];
    $_SESSION['escola_proff'] = $dados['escola_proff'];
    header('location: perfil.php');
    exit();
} else {
    header('location: ../login.php');
    exit();
}
