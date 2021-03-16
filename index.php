<?php 
require 'includes/connection.php';
 

$sql = 'SELECT id,abrev_cont,continente,pais,foto_index FROM descubra WHERE deletado = 0;';
$sth = $dbh->prepare($sql);
$sth->execute();
$descubra = $sth->fetchAll();

$sql = 'SELECT id,foto_arte,lugar FROM streetarts WHERE estado = 0;';
$sth = $dbh->prepare($sql);
$sth->execute();
$streetarts = $sth->fetchAll();

$sql = 'SELECT id,relato,autor,pais_origem FROM relatos WHERE estado = 0;';
$sth = $dbh->prepare($sql);
$sth->execute();
$relatos = $sth->fetchAll();

session_start();
if (isset($_SESSION["show"])) {
	$show = $_SESSION["show"];
}
if (isset($_SESSION["msg"])) {
    $msg = $_SESSION["msg"];
}
?> 


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Next Destination</title>
	<link rel="icon" type="image/x-icon" href="nextdestination/images/globe.ico"/>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
	<link rel="stylesheet" href="css/nd.css">
	<link rel="stylesheet" href="css/responsive.css">

	
</head>
<style>

body {

	overflow-x: hidden;
}

</style>
<body>


<?php require 'includes/menu.php'; ?>
<div class="alert alert-success m-4 text-center <?php echo ($show ==1)?'':'d-none'; $_SESSION["show"]=0?>" role="alert" id="alert">
		<?php echo $msg?>
</div>

<!-- ÁREAS DOS TOURS -->

<div class="container-fluid m-1 p-1">
	<div class="row mx-0 my-3">
		<?php foreach ($descubra as $key => $id) { ?>
		<div class="col my-3 d-flex justify-content-center">
			<div class="position-relative">	
				<img class="shadow" src="<?php echo './images/index/' . $id['foto_index'] ?>" style="height: 35em; width:45em; border-radius: 0 25px 0 0;" alt="">
				<div class="sobreposicao container">
					<div class="row">
						<div class="col-1"> <?php echo $id['id'] ?>.</div>
						<div class="col-7"> <h1> <?php echo $id['abrev_cont'] ?> </h1></div>
					</div>
					<div class="row mb-2 text-center">
						<div class="col"> <?php echo $id['continente'] ?></div>
					</div>
					<div class="row mb-4 text-center">
						<div class="col"><br><b>Descubra <?php echo $id['pais'] ?></b></div>
					</div>
					<div class="row justify-content-center">
						<a class="col-6 px-4 button btn-more saber-mais" href="tours.php?id=<?php echo $id['id'] ?>">Saiba mais</a>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>



<!-- SOBRE ROTEIROS -->
<div class="container my-5 p-5">
	<div class="row ml-4 pl-4">
		<div class="col-6 text-left ml-4 pl-4">
			<b><h1>#NextDestination</h1></b>
			<h5> Roteiros de Viagem</h5><br>
		</div>
	</div>

	<div class="row ml-4 pl-4">
		<div class="col-5 text-left ml-4 pl-4">	
			Aqui encontrarás roteiros de viagens para diversas partes do mundo. Os roteiros foram criados a partir de pesquisas e experiências próprias para trazer o melhor que cada cidade tem a oferecer.
		</div>
		<div class="col-5 text-left" style="font-weight: 5;">Navegue pelo site e descubra os roteiros preparados por nós, com informações sobre as cidades, tempo sugerido a passar em cada uma delas, além de uma estimativa de budget total, para não ter surpresas com gastos futuros.
		</div>
	</div>
	
	<div class="row text-right mt-5 ml-5">
		<div class="col-10">
			<button type="button" class="btn border border-dark" onclick="location.href='sobre.php'"  style="background-color:white; ">Leia mais</button>
		</div>
	</div>
</div>


<!--STREET ARTS-->
<div class="container">
	<div class="row">
		<?php foreach ($streetarts as $key => $id) { ?>
		<div class="col-6 col-md-3">
			<div class="position-relative street">
				<img class="img-fluid" src="<?php echo './images/artes/' . $id['foto_arte'] ?>" alt="">
				<div class="overlay">street art - <?php echo $id['lugar'] ?></div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>


<!--RELATOS E OPINIÕES-->

<div class="container-fluid py-5 my-5" style="background-color: black; color: white;" >
	<div class="text-center mb-4 row">
		<h2>Relatos que contam</h2>
		<h6>Alguns de nossos utilizadores dizem sobre o que acharam de nossos roteiros</h6>
	</div>
	<div class="row text-center mx-3 px-3 ">
		<?php foreach ($relatos as $key => $id) { ?>
		<div class="col-md-3 my-3">
			<?php echo $id['relato'] ?><br>
			<b><br><?php echo $id['autor'] ?>/<?php echo $id['pais_origem'] ?></b></a>
		</div>
		<?php } ?>
	</div>
</div>
		

<!--RECEBER ATUALIZAÇÕES-->

<div class="container-fluid py-5 my-5" id="atualizacoes"  >
	<div class="text-center mb-4 row">
		<h6><b>Não perca nada! Receba nossas atualizações!</h6></b>
		<div class="container mt-3">
			<form action="./includes/recebermail.php" method="post" onsubmit="mailenviar.disabled = true; return true;">
  			<input type="email" class="mail" id="mail" name="mail" required placeholder="Insira o seu e-mail aqui*"><br>
  			<input type="submit" id= "mailenviar" value="Assine já">
			</form>
		</div>
	</div>
</div>


<!--Footer-->
<div class="footer">
	<p style="cursor: pointer; text-decoration-line: underline" onclick="location.href='./admin/index.php'">Modo de Administração</p>
	<div class="text-center row" style="font-size: small;">
		<p>2021 <i>Next Destination</i>. Desenvolvido por <b>Luísa Endres</b></p>
	</div>
</div>


<!-- FORMULÁRIO PARA INSERÇÃO MENSAGENS (NOME/EMAIL/MSG) -->

<div id="form-btn">
	<a class="d-flex justify-content-center align-items-center" href="#">
		<i class="fas fa-comment-dots fa-2x"></i>
	</a>	
</div>

<div id="form-msg" class="d-none shadow" >
	<div class="form-header"> 
		<div class="text-center text-white my-3" style="font-size:large;"><b>Envie uma mensagem!</div></b>
		<div class="text-center text-white" style="font-size:small;">Tens alguma dúvida ou sugestão para o nosso site? Mande para nós e responderemos assim que possível!</div>
	</div>

	<div class="form-content p-3">
		<form id="form-send-msg" action="./includes/mensagens.php" method="post" onsubmit="msgenviar.disabled = true; return true;">
			<div class="mb-3">
				<input class="form-control" type="text" name="nome" id="nome" required placeholder="*Nome">
			</div>
			<div class="mb-3">
				<input class="form-control" type="email" name="email" id="email" required placeholder="*Email">
			</div>

			<div class="mb-3">
				<textarea class="form-control" name="mensagem" id="mensagem" rows="2" required placeholder="*Mensagem"></textarea>
			</div>
			<button class="btn btn-dark btn-block letra" id="msgenviar" style="width: 100%;">Enviar</button>
		</form>
	</div>
</div>
 

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/nextdestination.js"></script>
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