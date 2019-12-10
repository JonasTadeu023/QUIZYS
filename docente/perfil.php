<!DOCTYPE html>
<html>
<head>
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
  
  .card{
    width: 500px;
  }
  .card-content{
    width: 200px;
    height: 100px;
  }
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



 </head>

<body>



 <div class="container">
       <nav class="nav-extended">
          <div class="nav-wrapper">
              <a href="#" class="brand-logo">Perfil professor</a>
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

          <ul id="nav-mobile" class="right hide-on-med-and-down">
         <li><a href="add_teste.php" style="color: #FFFFFF">Criar teste</a></li>
         <li><a href="ver_testes.php" style="color: #FFFFFF">Visualisar testes criados</a></li>
         <li><a href="../functions/logout.php" style="color: #FFFFFF">Sair</a></li>
          </ul>

          </div>
      </nav>
<div class="row">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
        	<?php 
		    session_start();
		    include '../functions/connect_db.php';
		    $id = $_SESSION['id_proff'];
		    $professor =  $_SESSION['nome_proff'];
		    $foto = $_SESSION['foto_proff'];
		    $email = $_SESSION['email_proff'];
		    $materia = $_SESSION['disciplina_proff'];
		    $escola = $_SESSION['escola_proff'];
		    $sql = mysqli_query($connect, "SELECT * FROM professor WHERE id_proff = '$id'");
		?>
         <h5>Bem vindoª, professorª <?=$_SESSION['nome_proff'];?></h5>
         <?php echo "<br> <img  style = 'width: 200px;' src = 'users/$professor/$foto'>";?>
         <br>
		 <b>Usuário: 	<?=$_SESSION['nome_proff'];?></b>
         <br><br>
         <b>Email: 		<?=$_SESSION['email_proff'];?></b>
         <br><br>
         <b>Matéria:	<?=$_SESSION['disciplina_proff'];?></b>
        </div>

<br><br>

        </div>
      </div>
    </div>    
</body>
</html> 

