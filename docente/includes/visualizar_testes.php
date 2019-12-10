<?php
    $proff_id = $_SESSION['id_proff'];
    $sql = mysqli_query($connect, "SELECT * FROM teste WHERE teste_proff_id = '$proff_id'");

    while($dados = $sql->fetch_assoc()){
        $id = $dados['teste_id'];
        $nome = $dados['teste_nome'];
        echo "<tr>";
            echo "<td>$nome</td><td><a href='add_pergunta.php?id=$id'><i class='material-icons'>add</i></td>";
            echo "<td><a href='includes/excluir_teste.php?id=$id'><i class='material-icons'>clear</i></td>";
            echo "<td><a href='includes/editar_teste.php?id=$id'><i class='material-icons'>edit</i></td>";
            echo "<td><a href='ver_resultados_alunos.php?id=$id'><i class='material-icons'>youtube_searched_for</i></td>";
        echo "</tr>";
    }