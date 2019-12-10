<?php
    session_start();
    include '../../functions/connect_db.php';
    $id = $_SESSION['id_proff'];
    $teste = mysqli_real_escape_string($connect, trim($_POST['nometeste']));

    $resultado = "INSERT INTO teste (teste_nome, teste_proff_id) VALUES ('$teste', '$id')";
    $result_criacao = mysqli_query($connect, $resultado);

    $connect->close();
	header('location: ../perfil.php');
	exit();
?>