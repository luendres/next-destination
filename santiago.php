<?php
	require 'includes/connection.php';
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

<!-- Santiago Tour -->
<div class="container-fluid p-0">
	<div id="triangle">
		<div class="segmentTriangle">
			<div class="row text-center pt-5 mb-4 container-fluid" style="color: white;">
				<h1><b>Santiago tour</h1></b>
				<p><i>A capital e maior cidade do Chile que fica em um vale circundado pelos Andes cobertos pela neve</i></p>
			</div>

<!--Imagens tour-->
			<div class="container">
				<div class="row">
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/santiago/1.jpg" alt="">
						</div>
					</div>
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/santiago/2.jpg" alt="">
						</div>
					</div>
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/santiago/3.jpg" alt="">
						</div>
					</div>
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/santiago/4.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Descri????o tour-->
<div class="container mt-5 pt-5">
	<div class="text-center row mt-4 " style="color: black;">
		<b><h1>Roteiro dos lugares essenciais de Santiago do Chile </h1></b>
		<br>
		<h5> Dura????o recomendada: 3 dias </h5>
	</div>

	<!--PRIMEIRO DIA-->
	<div class="row mt-5">
		<div class="text-center col-5">	
			<h3>PRIMEIRO DIA:</h3>
		</div>
		<div class="text-left col-6">
			<h5>Cerro Santa Lucia, Plaza de Armas, Palacio de la Moneda, Bellavista. </h5>
		</div>
	</div>
	<div class="row ">
		<div class="text-center my-4 col">	
			<p style="text-align: justify;"> Comece o tour por Santiago visitando um ponto tur??stico indispens??vel da cidade, o <b>Cerro Santa Lucia</b>, localizado no bairro hist??rico de <i>Lastarria</i>. Por ser considerado um bairro cultural, voc?? tamb??m encontrar?? aos arredores v??rios cinemas, teatros, museus, bares e restaurantes. O nome do Cerro Santa Luc??a ficou definido em 13 de Dezembro de 1541, ap??s Pedro de Valdivia (primeiro governador real do Chile) conquistar o monte. Ao fazer a visita voc?? poder?? ter uma vista linda da cidade de Santiago, pois o cerro est?? a uma altitude de 629 metros acima do n??vel do mar. Tamb??m poder?? ver pontos como o trajeto antigo do trem da cidade, um monumento ao Pedro de Valdivia, al??m de tamb??m encontrar um belo p??tio para descansar e tirar muitas fotos.<br>
			<br>

			Seguimos para o centro hist??rico da cidade, onde iremos conhecer a <b>Plaza de Armas</b>, a principal pra??a da cidade que abriga v??rios marcos arquitet??nicos entre eles pr??dios governamentais e a imponente Catedral Metropolitana. A pra??a hoje oferece muitas atividades culturais, sendo poss??vel observar v??rios pintores, m??sicos e humoristas apresentando seu trabalho para os turistas. Do lado da Plaza de Armas tamb??m poder?? ver a <i>Catedral Metropolitana</i>, o principal e mais importante templo cat??lico do Chile tamb??m considerado um monumento nacional.<br>
			<br>
			
			Continuando o passeio pelo centro hist??rico, vamos at?? o <b>Palacio de La Moneda</b>, imponente constru????o em frente a <i>Plaza Bulnes</i> que foi declarado como monumento nacional ?? um dos principais s??mbolos da capital chilena. O Pal??cio hoje ?? a sede da presid??ncia da republica do Chile e tamb??m abriga no subsolo um centro cultural com exposi????es permanentes, sendo poss??vel fazer outros passeios guiados.<br>
			<br>

			Para acabar o primeiro dia na cidade, vamos at?? o bairro <b>Bellavista</b>, dividido entre as regi??es de <i>Providencia</i> e <i>Recoleta</i>, e todo arborizado e cheio de cores. Isso porque todo o local ?? coberto de arte nas paredes, ruas, casas e etc. ?? considerado o bairro mais bo??mio da cidade. Tamb??m n??o deixe de conhecer o <i>P??tio Bellavista</i>, que abriga diversas op????es de ??timos bares e restaurantes. ?? um local muito bonito e que vale incluir na sua noite dentro do bairro. 
			</p>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<img class="img-fluid" src="images/santiago/cerro.jpg" alt="" style="border-top-left-radius: 20%;">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/santiago/plaza.jpg" alt="" style="border-top-right-radius: 20%;">
		</div>
	</div>
	<div class="row mt-4">
		<div class="col posicionar">
			<img class="img-fluid" src="images/santiago/palacio.jpg" alt="" style="border-bottom-left-radius: 20%; transform: translateY(-95px);">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/santiago/patio.jpg" alt="" style="border-bottom-right-radius: 20%;">
		</div>
	</div>
</div>
	

<!--Dicas -->
<div class="container-fluid py-4" style="background-color: black; color: white;" >
	<div class="text-center mb-4 row">
		<h2>Dicas importantes!</h2>
		<div class="container">
			<div class="row ml-4 mt-4">
				<div class="col-5 mr-4 pl-2">
					<b>Tours para a visita ao Palacio de La Moneda</b><br>
					<br><p style="text-align: justify;">?? poss??vel entrar e fazer uma visita gratuita e guiada ao Palacio de La Moneda. Para ter a oportunidade de conhecer seu interior ?? necess??rio fazer um agendamento, de preferencia  duas a tr??s semanas antes, j?? que as vagas dispon??veis s??o sempre preenchidas muito rapidamente. <br>
				</div>
				
				<div class="col-5 ml-5 pl-2">
					<b>Descubra o que o Patio Bellavista tem para oferecer</b><br>
					<br><p style="text-align: justify;">Entre no site oficial e saiba mais sobre as op????es de lazer, cultura, gastronomia e compras que o Patio Bellavista tem a oferecer. </p><br>
				</div>	
				<div class="row text-center mt-4">
					<div class="col-5 mr-4 pl-4">
						<a class="button btn-more" onclick="window.location.href='https://visitasguiadas.presidencia.cl/';">Descubra mais</a>
					</div>
					
					<div class="col-5 ml-4 pl-5">
						<a class="button btn-more" onclick="window.location.href='https://patiobellavista.cl/';">Descubra mais</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--SEGUNDO DIA-->
<div class="container mt-3 pt-3">
	<div class="row mt-5">
		<div class="text-center col-5">	
			<h3>SEGUNDO DIA:</h3>
		</div>
		<div class="text-left col-6">
			<h5>Visita ?? vin??cola Concha y Toro.</h5>
		</div>
	</div>
	<div class="row ">
		<div class="text-center my-4 col">	
			<p style="text-align: justify;"> 
			Nosso roteiro para o segundo dia ?? dedicado principalmente para conhecer a vin??cola <b>Concha y Toro</b>, que fica a 30 km da capital do Chile e ?? considerada uma das melhores vin??colas do pa??s, que ?? conhecido por seus vinhos incr??veis. Por conta disso, este passeio n??o podia faltar na lista de o que fazer em Santiago, e o passeio ?? realmente imperd??vel. <br>
			<br>
			
			A franquia Concha y Toro possui hoje a maior quantidade de terrenos plantados para a produ????o de vinho no mundo. Al??m disso, tamb??m foi a primeira a entrar na Bolsa de Valores de Nova York e j?? ganhou tr??s pr??mios, dois deles como a <i>???Marca de Vinho Mais Admirada e Poderosa no Mundo???</i>. No passeio para a vin??cula ?? poss??vel conhecer al??m dos lindos jardins da propriedade, a parte de fora da casa de veraneio do s??culo 19 da fam??lia Concha y Toro, as planta????es, que contam com 26 tipos de uvas, as adegas do famoso vinho <i>Casillero del Diablo</i> e tamb??m fazer a degusta????o de alguns dos vinhos produzidos ali. Em todo esse passeio, um guia conta tudo sobre a produ????o da bebida e a hist??ria do local.<br>
			<br>

			 Se optar pelo tour <i>Marques de Casa Concha</i> ao inv??s do tradicional, ser?? poss??vel ver alguns outros espa??os da vin??cola e experimentar vinhos premium, com um passeio mais longo. Essas excurs??es organizadas pela Concha y Toro acontecem todos os dias das 09:50 at?? ??s 17:00, e o valor delas varia entre 14 e 25 mil pesos chilenos. Como essa ?? uma vin??cola muito popular entre os turistas, eles s?? fazem os tours com hor??rio agendado com pelo menos 24 horas de anteced??ncia.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<img class="img-fluid" src="images/santiago/vinicula1.jpg" alt="" style="border-top-left-radius: 20%;">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/santiago/vinicula2.jpg" alt="" style="border-top-right-radius: 20%;">
		</div>
	</div>
	<div class="row mt-4">
		<div class="col posicionar">
			<img class="img-fluid" src="images/santiago/vinicula3.jpg" alt="" style="border-bottom-left-radius: 20%; transform: translateY(-95px);">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/santiago/vinicula4.jpg" alt="" style="border-bottom-right-radius: 20%;">
		</div>
	</div>
</div>	
	

<!--Dicas -->
	<div class="container-fluid py-4" style="background-color: black; color: white;" >
	<div class="text-center mb-4 row">
		<h2>Dicas importantes!</h2>
		<div class="container">
			<div class="row ml-4 mt-4">
				<div class="col-5 mr-4 pl-2">
					<b>Reserve a visita ?? vinicula</b><br>
					<br><p style="text-align: justify;">Como dito antes, a visita ?? vinicula Concha y Toro deve ser agendada com a maior anteced??ncia poss??vel. Verifique no site as disponibilidades para n??o ter surpresas.<br>
				</div>
				
				<div class="col-5 ml-5 pl-2">
					<b>Compre um tour ?? vinicula saindo desde Santiago</b><br>
					<br><p style="text-align: justify;">Se preferir comprar o tour j?? com o deslocamento de Santiago at?? a vinicula incluido, poder?? ver as diversas op????es e tipos diferentes de pacotes dispon??veis para a escolha. </p> <br>
				</div>	
				<div class="row text-center mt-4">
					<div class="col-5 mr-4 pl-4">
						<a class="button btn-more" onclick="window.location.href='https://reserva.cyt.conchaytoro.cl/cytWP/';">Descubra mais</a>
					</div>
					
					<div class="col-5 ml-4 pl-5">
						<a class="button btn-more" onclick="window.location.href='https://www.viator.com/pt-PT/tours/Santiago/Concha-y-Toro-Winery-Tour-from-Santiago/d713-6315CONCHA';">Descubra mais</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--TERCEIRO DIA-->
<div class="container mt-3 pt-3">
	<div class="row mt-5">
		<div class="text-center col-5">	
			<h3>TERCEIRO DIA:</h3>
		</div>
		<div class="text-left col-6">
			<h5>Ida a Caj??n del Maipo e Embalse el Yeso</h5>
		</div>
	</div>
	<div class="row ">
		<div class="text-center my-4 col">	
			<p style="text-align: justify;">A sugest??o para acabar o roteiro em Santiago ?? reservar o dia para se desconectar com o mundo e apreciar a natureza. O Chile tem lugares incr??veis para isso e um deles ?? o <b>Caj??n del Maipo</b>, c??nion da regi??o metropolitana de Santiago que fica entre os Andes e o rio Maipo. O passeio dura o dia inteiro e ?? feito em conjunto com outras atra????es no caminho. A recomenda????o aqui ?? ir com algum pacote de turismo que ofere??a a ida at?? o lugar, j?? que n??o ?? aconselh??vel ir por conta pr??pria.<br>
			<br>

			Tenha certeza que o passeio inclua tamb??m o <b>Embalse el Yeso</b>, um lago artificial localizado em meio ?? Cordilheira, que muda de cor de acordo com o tempo. O lago ?? um dos principais reservat??rios de ??gua da regi??o de Santiago, que abastece cerca de 70% da popula????o da metr??pole. <br>
			<br>

			A paisagem desse dois destinos ?? de tirar o f??lego. Lagoas de ??guas azuis ou esverdeadas, dependendo do dia, montanhas salpicadas de neve e terra escura, tudo isso a somente 110 km de distancia do centro de Santiago. Note como o cen??rio muda conforme vai chegando perto do Caj??n. Nos finais de semana o lugar fica mais movimentado, recebendo muitos chilenos, mas se voc?? optar pela visita em dias de semana ser?? muito tranquilo.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<img class="img-fluid" src="images/santiago/cajon.jpg" alt="" style="border-top-left-radius: 20%;">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/santiago/embalse.jpg" alt="" style="border-top-right-radius: 20%;">
		</div>
	</div>
	<div class="row mt-4">
		<div class="col posicionar">
			<img class="img-fluid" src="images/santiago/embalse1.jpg" alt="" style="border-bottom-left-radius: 20%; transform: translateY(-95px);">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/santiago/cajon1.jpg" alt="" style="border-bottom-right-radius: 20%;">
		</div>
	</div>
</div>	
	
<!--Experi??ncias-->

<div class="container-fluid py-5" style="background-color: black;" >
<section class="pt-3 pb-3">
  <div class="container">
    <div class="row">
        <div class="col-6">
            <h4 class="mb-3" style="color: white;">Algumas experi??ncias imperd??veis na cidade </h4>
        </div>

        <!--Bot??es left right-->
        <div class="col-6 text-right">
            <a class="btn btn-light mb-3 mr-1" href="#carouselIndicator" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="btn btn-light mb-3 " href="#carouselIndicator" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>

        <!--Carousel-->
        <div class="col-12">
            <div id="carouselIndicator" class="carousel slide" data-ride="carousel">

            	<!--Primeiro slide-->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">

                        	<!--Primeiro cart??o-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/santiago/ceviche.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Ceviche</h4>
                                        <p class="card-text" style="text-align: justify;">?? um prato de peixe branco cru marinado no suco de lim??o e acompanhado de v??rios temperos como pimenta, cebola e coentro. O prato tem suas origens disputadas entre o Chile e o Peru.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Segundo cart??o-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/santiago/caldillo.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Caldillo de Congrio</h4>
                                        <p class="card-text" style="text-align: justify;">?? um tipo de ensopado ou sopa com verduras, caldo de peixe e muitos temperos arom??ticos. Feito com o congrio rosa, peixe t??pico de toda a costa do Chile. Tem at?? uma vers??o feita pelo poeta Pablo Neruda.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Terceiro cart??o-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/santiago/curanto.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Curanto</h4>
                                        <p class="card-text" style="text-align: justify;"> ?? um grande cozido de mariscos e carnes, feito sobre pedras quentes e cobertos com camadas de folhas de uma planta local chamada <i>nalca</i>, tudo feito geralmente embaixo da terra. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Segundo slide-->
                    <div class="carousel-item">
                        <div class="row">

                        	<!--Primeiro cart??o-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/santiago/empanada.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Empanadas Chilenas</h4>
                                        <p class="card-text" style="text-align: justify;">?? uma esp??cie de pastel assado com uma massa mais encorpada, muitas vezes recheado de frutos do mar. A mais tradicional ?? a de <i>pino</i>, com carne de vaca, azeitona, ovo cozido e uva passa.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Segundo cart??o-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/santiago/choclo.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Pastel de Choclo</h4>
                                        <p class="card-text" style="text-align: justify;">?? na verdade uma esp??cie de empad??o, com uma massa de milho meio adocicado (o choclo) e recheio de carne, muitas vezes tamb??m com frango, ovos, passas, azeitona, etc. ?? um prato agridoce. </p>
                                    </div>
                                </div>
                            </div>

                            <!--Terceiro cart??o-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/santiago/pisco.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Pisco Sour</h4>
                                        <p class="card-text" style="text-align: justify;"> ?? uma bebida feita de aguardente de uva, acrescentada de lim??o, a????car, clara de ovo, angostura (uma bebida amarga e arom??tica) e gelo. A bebida tamb??m tem suas origens disputadas entre o Chile e o Peru.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>



<!--RECEBER ATUALIZA????ES-->

	<div class="container-fluid py-5 my-5">
		<div class="text-center mb-4 row">
			<h6><b>N??o perca nada! Receba nossas atualiza????es!</h6></b>
			<div class="container mt-3">
				<form id="form-send-mail" action="./includes/recebermail.php" method="post" onsubmit="enviar-mail.disabled = true; return true;">
					<input type="email" id="mail" name="mail" class="mail" required placeholder="Insira o seu e-mail aqui*"><br>
					<input type="submit" id="enviar-mail" value="Assine j??">
				</form>
			</div>
		</div>
	</div>



<!--Footer-->
<div class="footer">
	<div class="text-center row" style="font-size: small;">
		<p>2021 <i>Next Destination</i>. Desenvolvido por <b>Lu??sa Endres</b></p>
	</div>

<!-- Bot??o para subir para o topo da p??gina -->
	<button onclick="topFunction()" id="myBtn" title="Go to top">
		<i class="fas fa-arrow-up"></i>
	</button>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
// Bot??o para subir para o topo da p??gina 
	
	//Bot??o pra subir
	var mybutton = document.getElementById("myBtn");

	// Mostrar o bot??o a partir de 400px
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
  		if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
    	mybutton.style.display = "block";
  	} else {
    	mybutton.style.display = "none";
  	}
	}

	// Ao clicar subir para o topo
	function topFunction() {
  		document.body.scrollTop = 0;
  		document.documentElement.scrollTop = 0;
	}
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