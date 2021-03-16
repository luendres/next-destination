<?php
	require 'includes/connection.php';
	

	$id  = $_GET['id'];
	$sql = 'SELECT continente FROM continentes WHERE id = :id;';
	$sth = $dbh->prepare($sql);
	$sth->bindParam(':id', $id, PDO::PARAM_INT);
	$sth->execute();
	if ($sth) $continente = $sth->fetchObject()->continente;

	$id  = $_GET['id'];
	$sql = 'SELECT tour_id, id_continente, cidade, fotos, roteiro, descricao FROM tours WHERE id_continente = :id AND deletado = 0;';
	$sth = $dbh->prepare($sql);
	$sth->bindParam(':id', $id, PDO::PARAM_INT);
	$sth->execute();
	$tours = $sth->fetchAll();
	

	$id  = $_GET['id'];
	$sql = 'SELECT id, id_lugar, motivo, descricao FROM motivos WHERE id_lugar = :id;';
	$sth = $dbh->prepare($sql);
	$sth->bindParam(':id', $id, PDO::PARAM_INT);
	$sth->execute();
	$motivos = $sth->fetchAll();

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
	<link rel="icon" type="image/x-icon" href="images/globe.ico">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="css/fontawesome.min.css">
	<link rel="stylesheet" href="css/nd.css">

</head>
<style>

</style>

<body>
	<?php require 'includes/menu.php'; ?>
	<div class="alert alert-success m-4 text-center <?php echo ($show ==1)?'':'d-none'; $_SESSION["show"]=0?>" role="alert" id="alert">
  		<?php echo $msg?>
	</div>

	<!-- Nossos tours -->
	<div class="container-fluid pt-5 mt-5">
		<div class="text-center mb-4 row">
			<h1>Nossos tours pela <b><?= $continente ?></h1></b>
		</div>
	</div>


	<!-- Carousel -->
	<div class="pt-5 pb-5">
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<?php foreach ($tours as $key => $cidade) { ?>
					<div class="carousel-item <?php echo ($key == 0) ? 'active' :  ''; ?> ">
						<img src="<?php echo './images/tours/' . $cidade['fotos'] ?>" class="d-block img-fluid w-100">

						<div class="carousel-title text-center pt-4">
							<h3><?php echo $cidade['cidade'] ?></h3>

						</div>
						<div class="container px-4 carousel-title-description text-center">
							<p><?php echo $cidade['descricao'] ?></p>
						</div>


						<div class="text-center pt-4 pb-2">
							<button type="button" class="btn border border-dark" onclick="location.href='<?php echo $cidade['roteiro'] ?>'"  style="background-color:white; ">Descubra seu tour
							</button>
						</div>
					</div>
				<?php } ?>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>


	<!-- Porque escolher -->
	<div class="container w-75">
		<div class="row">
			<div class="text-center col-12 py-5 my-3" style="background-color: black; color: white;">
				<h2><b>Porque escolher a <?= $continente ?>?</h2>
			</div>
		</div>
		<div class="row d-flex justify-content-center">
			<?php foreach ($motivos as $key => $continente) { ?>
			<div class="col-lg-5 m-3 p-5" style="background-color: black; color: white;">
				<b>
					<h5><?php echo $continente['motivo'] ?>
				</b><br></h5>
				<?php echo $continente['descricao'] ?><br>
			</div>
			<?php } ?>
		</div>
	</div>

		<div class="container" style="margin-right: 1%;">
		
		</div>

	</div>
	</div>
	</div>

	<!--RECEBER ATUALIZAÇÕES-->

	<div class="container-fluid py-5 my-5">
		<div class="text-center mb-4 row">
			<h6><b>Não perca nada! Receba nossas atualizações!</h6></b>
			<div class="container mt-3">
				<form id="form-send-mail" action="./includes/recebermail.php" method="post" onsubmit="enviar-mail.disabled = true; return true;">
					<input type="email" id="mail" class="mail" name="mail" required placeholder="Insira o seu e-mail aqui*"><br>
					<input type="submit" id="enviar-mail" value="Assine já">
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