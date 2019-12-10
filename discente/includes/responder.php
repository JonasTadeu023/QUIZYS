<?php
    session_start();
    include 'connect_db.php';
    $id_teste = $_SESSION['id_teste'];
    $id_aluno = $_SESSION['id_aluno'];
    
    foreach($_POST['titulo_pergunta'] as $id => $titulo_pergunta){
        echo "Id da pergunta: $id";
        echo "Resposta marcada: $titulo_pergunta";
        echo "teste id: $id_teste<hr>";

        $sql = "INSERT INTO respostas (teste_id, pergunta_id, aluno_id, resposta) VALUES ('$id_teste', '$id', '$id_aluno', '$titulo_pergunta')";
        $result_sql= mysqli_query($connect, $sql);
    }
    $connect->close();
    header('location: ../ver_testes.php');
    exit();
?>