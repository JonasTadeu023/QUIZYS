<?php 
    $id_teste = $_SESSION['id_teste'];
    $foto= $_SESSION['foto_aluno'];
    $id_aluno = $_SESSION['id_aluno'];
    $i = 0;

    $sql = mysqli_query($connect, "SELECT * FROM perguntas where teste_id = '$id_teste'");
    
    while($rows = mysqli_fetch_array($sql)){
        $pergunta = $rows['titulo_pergunta'];
        $op_correta = $rows['resposta_correta'];
        echo "<tr>";
            echo "<td>$pergunta</td>";
            echo "<td>$op_correta</td>";
            $id_per = $rows['pergunta_id'];

            $sql1 = mysqli_query($connect, "SELECT * FROM respostas where teste_id = '$id_teste' AND pergunta_id = '$id_per'");

            foreach($sql1 as $rows1){
                $op_sua = $rows1['resposta'];
                $aluno = $rows1['aluno_id'];
                $aluno_id = $_SESSION['id_aluno'];

                if($aluno == $aluno_id ){
                    echo "<td>$op_sua</td>"; 
                    if($op_correta == $op_sua){
                        $i++;
                        
                    } 
                }
            }   
    }
    $sql3 = "INSERT INTO acertos (acertos, teste_id, aluno_id) VALUES ('$i', '$id_teste', '$id_aluno')";
    $result_sql= mysqli_query($connect, $sql3);
    echo "</tr>";
?>