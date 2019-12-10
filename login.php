<!DOCTYPE html>
  <html lang="pt-br">
    <head>
      <title>Quizz Plantas Ornamentais</title>
      
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

    <body>

      <!--Navbar-->
    <div class="container">
       <nav class="nav-extended">
          <div class="nav-wrapper">
              <a href="#" class="brand-logo">Quizz Plantas Ornamentais</a>
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          
          <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a class="waves-effect" href="#">Sobre</a></li>
          </ul>


          </div>
          <div class="nav-content">

            <ul class="tabs tabs-transparent">

              <li class="tab"><a href="#tab1">Discente</a></li>
              <li class="tab"><a href="#tab2">Docente</a></li>

            </ul>
 
          </div>
      </nav>

      <div id="tab1" class="col s12">
        <form action="discente/login.php" method="POST">

          <div class="input-field">
          	<label for="email2">Email</label>
          	<input id="email2" name="email" autocomplete="false" type="text">
          </div>

          <div class="input-field">
          	<label for="password">Senha</label>
          	<input id="password" name="senha" autocomplete="false" type="password">
          </div>

          <button class="btn waves-effect waves-light #4caf50 green" type="submit" name="action">Entrar
    	  <i class="material-icons right">send</i>
  		  </button>
        <br><br> 
        <a href="index.php">Não tem login? Clique aqui para se cadastrar</a>
        </form>
      </div>
 
      <div id="tab2" class="col s12">
        <form action="docente/login.php" method="POST">

          <div class="input-field">
          	<label for="email2">Email</label>
          	<input id="email2" name="email" autocomplete="false" type="text">
          </div>

          <div class="input-field">
          	<label for="password">Senha</label>
          	<input id="password" name="senha" autocomplete="false" type="password">
          </div>

          <button class="btn waves-effect waves-light #4caf50 green" type="submit" name="action">Entrar
    	  <i class="material-icons right">send</i>
  		  </button>
        <br><br> 
        <a href="index.php" style="color: #00c7b0">Não tem login? Clique aqui para se cadastrar</a>
        </form>
      </div>
    </div>

    </body>
  </html>