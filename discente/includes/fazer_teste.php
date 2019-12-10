
<style>

body{
  background-image: url("https://i.etsystatic.com/5466473/r/il/5a7a03/1582341233/il_794xN.1582341233_crq5.jpg");
}

.card {
  box-shadow: 0 2px 4px ;
  background-color: #FFFFFF;
  transition: 0.3s;
  width: 40%;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.letra{
    color: #FFFFFF;
    font-size:32px;
}

.letra2{
    color: #000000;
    font-size:21px;
}

.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}

</style>

<?php
    session_start();
    include 'connect_db.php';
    $_SESSION['id_teste'] = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $id_teste = $_SESSION['id_teste'];
    $sql = "SELECT * FROM perguntas WHERE teste_id = '$id_teste'";
    $query = mysqli_query($connect, $sql);
?>

<form action="responder.php" method="POST">
<center>
<p class="letra">Responda as questões abaixo: </p>
<div class="card">
    <?php
        while($rows = mysqli_fetch_array($query)){
            $id = $rows['pergunta_id'];
            $op1 = $rows['resposta_correta'];
            $_SESSION['op_correta'] = $op1;
            $op2 = $rows['resposta1'];
            $op3 = $rows['resposta2'];
            $op4 = $rows['resposta3'];
            $op5 = $rows['resposta4'];
            $_SESSION['id'] = $id;
            $_SESSION['pergunta'] = $rows['titulo_pergunta'];
            $my_array = array("$op1","$op2","$op3","$op4","$op5");
            shuffle($my_array);
    ?>
    <p class="letra2"><?php echo $rows['titulo_pergunta'] ; echo '<br><br>'?></p><?php 
        foreach($my_array as $ops){
            echo "<input type='radio' name='titulo_pergunta[$id]' value='$ops'>$ops <br><br>";
            }
        }
    ?>
    <input type="submit" value="Responder" class="button">
    <br><br>
</form>
</div>
</center>

