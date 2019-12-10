
<?php 
    session_start();
    include '../functions/connect_db.php';
    $professor =  $_SESSION['nome_proff'];
    $foto = $_SESSION['foto_proff'];

    $_SESSION['id_teste'] = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
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


    </head>
    <div class="container">
       <nav class="nav-extended">
          <div class="nav-wrapper">
              <a href="#" class="brand-logo">Cadastrar Testes</a>
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

          <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="perfil.php" style="color: #FFFFFF">Voltar</a></li>
          <li><a href="add_teste.php" style="color: #FFFFFF">Criar teste</a></li>
          <li><a href="../functions/logout.php" style="color: #FFFFFF">Sair</a></li>            
          </ul>

          </div>
      </nav>
    <br><br>
        <div id="tab2" class="col s12">
            <form action="includes/cadastrar_pergunta.php" method="POST">

            <div class="input-field">
                <label for="email">Pergunta</label>
                <input id="nometeste" name="pergunta" autocomplete="false" type="text">
            </div>
                <br>
                <div class="input-field">
                <label for="email">Resposta correta</label>
                <input id="nometeste" name="correta" autocomplete="false" type="text">
            </div>
                <br>
                <div class="input-field">
                <label for="email">Alternativa 1</label>
                <input id="nometeste" name="op1" autocomplete="false" type="text">
            </div>
                <br>
                <div class="input-field">
                <label for="email">Alternativa 2</label>
                <input id="nometeste" name="op2" autocomplete="false" type="text">
            </div>
                <br>
                <div class="input-field">
                <label for="email">Alternativa 3</label>
                <input id="nometeste" name="op3" autocomplete="false" type="text">
            </div>
                <br>
                <div class="input-field">
                <label for="email">Alternativa 4</label>
                <input id="nometeste" name="op4" autocomplete="false" type="text">
            </div>
                <br>
            <button class="btn waves-effect waves-light #4caf50 green" type="submit" name="action">Cadastrar
            <i class="material-icons right">send</i>
            </button>
        </div>