
<?php 
	session_start();
	include '../functions/connect_db.php';
	$aluno =  $_SESSION['nome_aluno'];
	$foto=$_SESSION['foto_aluno'];

?>


<!DOCTYPE html>
  <html lang="pt-br">
  <meta charset="UTF-8ss">
    <head>
      <title>Quizz Show</title>
      
       <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/custom.css">

      <meta charset="utf-8">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

      <style>
.nav-wrapper  {
    background-image: url("https://i.etsystatic.com/5466473/r/il/5a7a03/1582341233/il_794xN.1582341233_crq5.jpg");
    font-size: 14px;
    font-weight: bold;
  }

.nav-content  {
    background-color: #145200 !important;
    font-size: 13px;
  }

  body{
      background-color:#f2f2f2;
    }
 
</style>

<a href="../functions/logout.php">Sair</a>
<a href="ver_testes.php">ver testes para fazer</a>
<a href="../functions/logout.php">Sair</a>


      <?php
        include 'includes/fazer_teste.php';
      ?>
    
