<?php 
require './includes/connection.php';
session_start();
if (isset($_SESSION["show"])) {
	$show = $_SESSION["show"];
}
if (isset($_SESSION["msg"])) {
    $msg = $_SESSION["msg"];
} 

$sql = 'SELECT id,nome,email,cidade,pais,avatar FROM equipe WHERE estado = 0;';
$sth = $dbh->prepare($sql);
$sth->execute();
$equipe = $sth->fetchAll();
?> 


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Next Destination</title>
	<link rel="icon" type="image/x-icon" href="images/globe.ico"/>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/fontawesome.min.css">
	<link rel="stylesheet" href="css/nd.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
</head>
<style>

</style>
<body>
<?php require 'includes/menu.php'; ?>
<div class="alert alert-success m-4 text-center <?php echo ($show ==1)?'':'d-none'; $_SESSION["show"]=0?>" role="alert" id="alert">
		<?php echo $msg?>
</div>
	

<!-- SOBRE -->
<div class="container my-5 p-5">
	<div class="row">
		<div class="col-6 ml-0 text-right" style="font-size: 40px">
			<b><h1><br>SOBRE A</h1></b>
		</div>
		<div class="col-6">
			<img src="images/logond4.png" style="width:19rem;height:6rem;">
		</div>
	</div>
	<div class="row mx-5">
		<div class="col-6 ml-0 text-right">	
			<p style="text-align: justify;">Somos uma equipe composta por amantes de viagens, e preparamos diversos roteiros baseados nas nossas experiências e pesquisas, para que as suas futuras viagens possam ser aproveitadas ao máximo também.</p>
		</div>
		<div class="col-6" style="font-weight: 5;">
			<p style="text-align: justify;">Abaixo poderás conferir os membros da nossa equipe. Sinta-se à vontade para nos contatar, seja para pedir ajuda na criação de um roteiro específico, ou para mandar sugestões. Também pode entrar em contato através do nosso chat no canto direito da <i>Página Inicial.</i></p>
		</div>
	</div>
</div>


<!-- EQUIPE -->

<div class="container-fluid pt-5 mb-n5" style="background-color: lightblue;" >
	<div class="container-fluid py-5 my-5 px-3 " style="background-color: black; color: white;" >
		<div class="text-center mb-4 row">
			<h2><b>NOSSA EQUIPE</h2></b>
			<div class="row">
				<?php foreach ($equipe as $key => $id) { ?>
				<div class="col-md-4 col-sm-12 col-lg-4 pt-5 ">
					<div class="container">
						<div class="row" style="justify-content: center;">
							<img src="<?php echo './images/avatares/' . $id['avatar'] ?>" style="width: 27%;">
						</div>
						<div class="row pt-5">
							<b><?php echo $id['nome'] ?></b>
						</div>
						<div class="row pt-4">
							<i><?php echo $id['email'] ?></i>
						</div>
						<div class="row pt-3">
							<b><?php echo $id['cidade'] ?>|<?php echo $id['pais'] ?></b>
						</div>
					</div>
				</div>
				<?php } ?>	
			</div>
		</div>
	</div>
</div>



<!--RECEBER ATUALIZAÇÕES-->

<div class="container-fluid py-5 my-5" id="atualizacoes"  >
	<div class="text-center mb-4 row">
		<h6><b>Não perca nada! Receba nossas atualizações!</h6></b>
		<div class="container mt-3">
			<form action="./includes/recebermail.php" method="post" onsubmit="mailenviar.disabled = true; return true;">
  			<input type="email" id="mail" class="mail" name="mail" required placeholder="Insira o seu e-mail aqui*"><br>
  			<input type="submit" id= "mailenviar" value="Assine já">
			</form>
		</div>
	</div>
</div>


<!--Footer-->
<div class="footer">
	<div class="text-center row" style="font-size: small;">
		<p>2021 <i>Next Destination</i>. Desenvolvido por <b>Luísa Endres</b></p>
	</div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/nextdestination.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<script>
	 document.addEventListener("DOMContentLoaded", function() {
        var alert = document.getElementById("alert");
        if (!alert.className.match(/\bd-none\b/)) {		
            setTimeout(function() {                
                alert.classList.add("d-none");
            }, 4000);
        }
    });
    </script>

</body>

</html>