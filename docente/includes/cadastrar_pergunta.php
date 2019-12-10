<?php
    session_start();
    include 'connect_db.php';
    $professor = $_SESSION['id_proff'];
    $foto = $_SESSION['foto_proff'];
    $id_teste = $_SESSION['id_teste'];

	$pergunta = mysqli_real_escape_string($connect, trim($_POST['pergunta']));
	$resposta_correta = mysqli_real_escape_string($connect, trim($_POST['correta']));
	$op1 = mysqli_real_escape_string($connect, trim($_POST['op1']));
    $op2 = mysqli_real_escape_string($connect, trim($_POST['op2']));
    $op3 = mysqli_real_escape_string($connect, trim($_POST['op3']));
    $op4 = mysqli_real_escape_string($connect, trim($_POST['op4']));

    $sql = "INSERT INTO perguntas (teste_id, proff_id, titulo_pergunta, resposta_correta, resposta1, resposta2, resposta3, resposta4) VALUES ('$id_teste', '$professor', '$pergunta', '$resposta_correta', '$op1', '$op2', '$op3', '$op4')";
    $result_sql= mysqli_query($connect, $sql);
    
    $connect->close();
	header('location: ../ver_testes.php');
    exit();
?>    
