<?php
    $sql = mysqli_query($connect, "SELECT * FROM teste");

    while($dados = $sql->fetch_assoc()){
        $id = $dados['teste_id'];
        $nome = $dados['teste_nome'];
        echo "<tr>";
            echo "<td>$nome</td><td><a href='includes/fazer_teste.php?id=$id'><i class='material-icons'>games</i></td>";
            echo "<td><a href='resultados.php?id=$id'><i class='material-icons'>youtube_searched_for
            </i></td>";
        echo "</tr>";
    }