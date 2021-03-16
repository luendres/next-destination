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

<!--Descrição tour-->
<div class="container mt-5 pt-5">
	<div class="text-center row mt-4 " style="color: black;">
		<b><h1>Roteiro dos lugares essenciais de Santiago do Chile </h1></b>
		<br>
		<h5> Duração recomendada: 3 dias </h5>
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
			<p style="text-align: justify;"> Comece o tour por Santiago visitando um ponto turístico indispensável da cidade, o <b>Cerro Santa Lucia</b>, localizado no bairro histórico de <i>Lastarria</i>. Por ser considerado um bairro cultural, você também encontrará aos arredores vários cinemas, teatros, museus, bares e restaurantes. O nome do Cerro Santa Lucía ficou definido em 13 de Dezembro de 1541, após Pedro de Valdivia (primeiro governador real do Chile) conquistar o monte. Ao fazer a visita você poderá ter uma vista linda da cidade de Santiago, pois o cerro está a uma altitude de 629 metros acima do nível do mar. Também poderá ver pontos como o trajeto antigo do trem da cidade, um monumento ao Pedro de Valdivia, além de também encontrar um belo pátio para descansar e tirar muitas fotos.<br>
			<br>

			Seguimos para o centro histórico da cidade, onde iremos conhecer a <b>Plaza de Armas</b>, a principal praça da cidade que abriga vários marcos arquitetônicos entre eles prédios governamentais e a imponente Catedral Metropolitana. A praça hoje oferece muitas atividades culturais, sendo possível observar vários pintores, músicos e humoristas apresentando seu trabalho para os turistas. Do lado da Plaza de Armas também poderá ver a <i>Catedral Metropolitana</i>, o principal e mais importante templo católico do Chile também considerado um monumento nacional.<br>
			<br>
			
			Continuando o passeio pelo centro histórico, vamos até o <b>Palacio de La Moneda</b>, imponente construção em frente a <i>Plaza Bulnes</i> que foi declarado como monumento nacional é um dos principais símbolos da capital chilena. O Palácio hoje é a sede da presidência da republica do Chile e também abriga no subsolo um centro cultural com exposições permanentes, sendo possível fazer outros passeios guiados.<br>
			<br>

			Para acabar o primeiro dia na cidade, vamos até o bairro <b>Bellavista</b>, dividido entre as regiões de <i>Providencia</i> e <i>Recoleta</i>, e todo arborizado e cheio de cores. Isso porque todo o local é coberto de arte nas paredes, ruas, casas e etc. É considerado o bairro mais boêmio da cidade. Também não deixe de conhecer o <i>Pátio Bellavista</i>, que abriga diversas opções de ótimos bares e restaurantes. É um local muito bonito e que vale incluir na sua noite dentro do bairro. 
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
					<br><p style="text-align: justify;">É possível entrar e fazer uma visita gratuita e guiada ao Palacio de La Moneda. Para ter a oportunidade de conhecer seu interior é necessário fazer um agendamento, de preferencia  duas a três semanas antes, já que as vagas disponíveis são sempre preenchidas muito rapidamente. <br>
				</div>
				
				<div class="col-5 ml-5 pl-2">
					<b>Descubra o que o Patio Bellavista tem para oferecer</b><br>
					<br><p style="text-align: justify;">Entre no site oficial e saiba mais sobre as opções de lazer, cultura, gastronomia e compras que o Patio Bellavista tem a oferecer. </p><br>
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
			<h5>Visita à vinícola Concha y Toro.</h5>
		</div>
	</div>
	<div class="row ">
		<div class="text-center my-4 col">	
			<p style="text-align: justify;"> 
			Nosso roteiro para o segundo dia é dedicado principalmente para conhecer a vinícola <b>Concha y Toro</b>, que fica a 30 km da capital do Chile e é considerada uma das melhores vinícolas do país, que é conhecido por seus vinhos incríveis. Por conta disso, este passeio não podia faltar na lista de o que fazer em Santiago, e o passeio é realmente imperdível. <br>
			<br>
			
			A franquia Concha y Toro possui hoje a maior quantidade de terrenos plantados para a produção de vinho no mundo. Além disso, também foi a primeira a entrar na Bolsa de Valores de Nova York e já ganhou três prêmios, dois deles como a <i>“Marca de Vinho Mais Admirada e Poderosa no Mundo”</i>. No passeio para a vinícula é possível conhecer além dos lindos jardins da propriedade, a parte de fora da casa de veraneio do século 19 da família Concha y Toro, as plantações, que contam com 26 tipos de uvas, as adegas do famoso vinho <i>Casillero del Diablo</i> e também fazer a degustação de alguns dos vinhos produzidos ali. Em todo esse passeio, um guia conta tudo sobre a produção da bebida e a história do local.<br>
			<br>

			 Se optar pelo tour <i>Marques de Casa Concha</i> ao invés do tradicional, será possível ver alguns outros espaços da vinícola e experimentar vinhos premium, com um passeio mais longo. Essas excursões organizadas pela Concha y Toro acontecem todos os dias das 09:50 até às 17:00, e o valor delas varia entre 14 e 25 mil pesos chilenos. Como essa é uma vinícola muito popular entre os turistas, eles só fazem os tours com horário agendado com pelo menos 24 horas de antecedência.
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
					<b>Reserve a visita à vinicula</b><br>
					<br><p style="text-align: justify;">Como dito antes, a visita à vinicula Concha y Toro deve ser agendada com a maior antecedência possível. Verifique no site as disponibilidades para não ter surpresas.<br>
				</div>
				
				<div class="col-5 ml-5 pl-2">
					<b>Compre um tour à vinicula saindo desde Santiago</b><br>
					<br><p style="text-align: justify;">Se preferir comprar o tour já com o deslocamento de Santiago até a vinicula incluido, poderá ver as diversas opções e tipos diferentes de pacotes disponíveis para a escolha. </p> <br>
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
			<h5>Ida a Cajón del Maipo e Embalse el Yeso</h5>
		</div>
	</div>
	<div class="row ">
		<div class="text-center my-4 col">	
			<p style="text-align: justify;">A sugestão para acabar o roteiro em Santiago é reservar o dia para se desconectar com o mundo e apreciar a natureza. O Chile tem lugares incríveis para isso e um deles é o <b>Cajón del Maipo</b>, cânion da região metropolitana de Santiago que fica entre os Andes e o rio Maipo. O passeio dura o dia inteiro e é feito em conjunto com outras atrações no caminho. A recomendação aqui é ir com algum pacote de turismo que ofereça a ida até o lugar, já que não é aconselhável ir por conta própria.<br>
			<br>

			Tenha certeza que o passeio inclua também o <b>Embalse el Yeso</b>, um lago artificial localizado em meio à Cordilheira, que muda de cor de acordo com o tempo. O lago é um dos principais reservatórios de água da região de Santiago, que abastece cerca de 70% da população da metrópole. <br>
			<br>

			A paisagem desse dois destinos é de tirar o fôlego. Lagoas de águas azuis ou esverdeadas, dependendo do dia, montanhas salpicadas de neve e terra escura, tudo isso a somente 110 km de distancia do centro de Santiago. Note como o cenário muda conforme vai chegando perto do Cajón. Nos finais de semana o lugar fica mais movimentado, recebendo muitos chilenos, mas se você optar pela visita em dias de semana será muito tranquilo.
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
	
<!--Experiências-->

<div class="container-fluid py-5" style="background-color: black;" >
<section class="pt-3 pb-3">
  <div class="container">
    <div class="row">
        <div class="col-6">
            <h4 class="mb-3" style="color: white;">Algumas experiências imperdíveis na cidade </h4>
        </div>

        <!--Botões left right-->
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

                        	<!--Primeiro cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/santiago/ceviche.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Ceviche</h4>
                                        <p class="card-text" style="text-align: justify;">É um prato de peixe branco cru marinado no suco de limão e acompanhado de vários temperos como pimenta, cebola e coentro. O prato tem suas origens disputadas entre o Chile e o Peru.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Segundo cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/santiago/caldillo.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Caldillo de Congrio</h4>
                                        <p class="card-text" style="text-align: justify;">É um tipo de ensopado ou sopa com verduras, caldo de peixe e muitos temperos aromáticos. Feito com o congrio rosa, peixe típico de toda a costa do Chile. Tem até uma versão feita pelo poeta Pablo Neruda.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Terceiro cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/santiago/curanto.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Curanto</h4>
                                        <p class="card-text" style="text-align: justify;"> É um grande cozido de mariscos e carnes, feito sobre pedras quentes e cobertos com camadas de folhas de uma planta local chamada <i>nalca</i>, tudo feito geralmente embaixo da terra. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Segundo slide-->
                    <div class="carousel-item">
                        <div class="row">

                        	<!--Primeiro cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/santiago/empanada.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Empanadas Chilenas</h4>
                                        <p class="card-text" style="text-align: justify;">É uma espécie de pastel assado com uma massa mais encorpada, muitas vezes recheado de frutos do mar. A mais tradicional é a de <i>pino</i>, com carne de vaca, azeitona, ovo cozido e uva passa.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Segundo cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/santiago/choclo.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Pastel de Choclo</h4>
                                        <p class="card-text" style="text-align: justify;">É na verdade uma espécie de empadão, com uma massa de milho meio adocicado (o choclo) e recheio de carne, muitas vezes também com frango, ovos, passas, azeitona, etc. É um prato agridoce. </p>
                                    </div>
                                </div>
                            </div>

                            <!--Terceiro cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/santiago/pisco.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Pisco Sour</h4>
                                        <p class="card-text" style="text-align: justify;"> É uma bebida feita de aguardente de uva, acrescentada de limão, açúcar, clara de ovo, angostura (uma bebida amarga e aromática) e gelo. A bebida também tem suas origens disputadas entre o Chile e o Peru.</p>
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



<!--RECEBER ATUALIZAÇÕES-->

	<div class="container-fluid py-5 my-5">
		<div class="text-center mb-4 row">
			<h6><b>Não perca nada! Receba nossas atualizações!</h6></b>
			<div class="container mt-3">
				<form id="form-send-mail" action="./includes/recebermail.php" method="post" onsubmit="enviar-mail.disabled = true; return true;">
					<input type="email" id="mail" name="mail" class="mail" required placeholder="Insira o seu e-mail aqui*"><br>
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

<!-- Botão para subir para o topo da página -->
	<button onclick="topFunction()" id="myBtn" title="Go to top">
		<i class="fas fa-arrow-up"></i>
	</button>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
// Botão para subir para o topo da página 
	
	//Botão pra subir
	var mybutton = document.getElementById("myBtn");

	// Mostrar o botão a partir de 400px
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