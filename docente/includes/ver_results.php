<?php 
    $id_teste = $_SESSION['id_teste'];

    $sql = mysqli_query($connect, "SELECT * FROM acertos where teste_id = '$id_teste' ORDER BY acertos DESC");
    
    while($rows = mysqli_fetch_array($sql)){
        $jogador = $rows['aluno_id'];
        $acertos = $rows['acertos'];
        echo "<tr>";
            

            $sql1 = mysqli_query($connect, "SELECT * FROM aluno where id_aluno = '$jogador'");

            foreach($sql1 as $rows1){
                $aluno = $rows1['nome_aluno'];
                echo "<td>$aluno</td>";
                echo "<td>$acertos</td>";
            }   
    }

    echo "</tr>";
?>