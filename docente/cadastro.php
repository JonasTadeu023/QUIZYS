<?php
	include '../functions/connect_db.php';
	$email = mysqli_real_escape_string($connect, trim($_POST['email']));
	$nome = mysqli_real_escape_string($connect, trim($_POST['nome']));
	$disciplina = mysqli_real_escape_string($connect, trim($_POST['disciplina']));
	$escola = mysqli_real_escape_string($connect, trim($_POST['escola']));
	$senha = mysqli_real_escape_string($connect, trim(md5($_POST['senha'])));
	$foto = $_FILES['arquivo']['name'];

	$consultasql = "SELECT count(*) as total from professor where email_proff = '$email'";
    $resultado = mysqli_query($connect, $consultasql);
    $row = mysqli_fetch_assoc($resultado);

    if ($row['total'] == 1) {
      $_SESSION['Usuario ja existe'] = true;
      header('location: ../index.html');
      exit();
    }
    $resultado = "INSERT INTO professor (nome_proff, email_proff, senha_proff, disciplina_proff, escola_proff, foto_proff, data_cadastro) VALUES ('$nome', '$email', '$senha', '$disciplina', '$escola', '$foto', NOW())";
	$result_perfil = mysqli_query($connect, $resultado);
	
	$pastausu = 'users/' . $nome . '/';
	mkdir($pastausu, 0777);
	
	if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $pastausu . $foto)) {
		if ($connect->query($consultassql) == true) {
			$_SESSION['status_cadastro'] = true;
		}
		$connect->close();
		header('location: ../login.php');
		exit();
	}
	
?>