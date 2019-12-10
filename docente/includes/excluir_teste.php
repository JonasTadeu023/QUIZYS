<?php 
    session_start();
    include 'connect_db.php';
    $professor =  $_SESSION['nome_proff'];
    $foto = $_SESSION['foto_proff'];

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    $sql = "DELETE FROM teste where teste_id = '$id'";
    $result_sql= mysqli_query($connect, $sql);
    
    $connect->close();
	header('location: ../perfil.php');
    exit();


?>