<?php

include '../functions/connect_db.php';

$email=mysqli_real_escape_string($connect, trim($_POST['e_mail']));
$nome=mysqli_real_escape_string($connect, trim($_POST['username']));
$senha=mysqli_real_escape_string($connect, trim(md5($_POST['password'])));
$foto=$_FILES['arquivo2']['name'];

$consultasql = "SELECT count(*) as total from aluno where email_aluno = '$email'";
    $resultado = mysqli_query($connect, $consultasql);
    $row = mysqli_fetch_assoc($resultado);

    if ($row['total'] == 1) {
      $_SESSION['Usuario ja existe'] = true;
      header('location: ../index.html');
      exit();
    }

$resultado="INSERT INTO aluno (email_aluno, nome_aluno, senha_aluno, foto_aluno, data_cadastro2) VALUES('$email', '$nome', '$senha', '$foto' , NOW())";

$result_perfil = mysqli_query($connect, $resultado);

$pastausu = 'users/' . $nome . '/';
mkdir($pastausu, 0777); 

if (move_uploaded_file($_FILES['arquivo2']['tmp_name'], $pastausu . $foto)) {
		if ($connect->query($consultassql) == true) {
			$_SESSION['status_cadastro'] = true;
		}
		$connect->close();
		header('location: ../login.php');
		exit();
	}


?>