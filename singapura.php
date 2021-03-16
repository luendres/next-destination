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
	

<!-- Singapura Tour -->
<div class="container-fluid p-0">
	<div id="triangle">
		<div class="segmentTriangle">
			<div class="row text-center pt-5 mb-4 container-fluid" style="color: white;">
				<h1><b>Singapura tour</h1></b>
				<p><i>O país mais moderno e desenvolvido do Sudeste Asiático</i></p>
			</div>

<!--Imagens tour-->
			<div class="container">
				<div class="row">
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/singapura/a.jpg" alt="">
						</div>
					</div>
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/singapura/b.jpg" alt="">
						</div>
					</div>
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/singapura/c.jpg" alt="">
						</div>
					</div>
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/singapura/d.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Descrição tour-->
<div class="container mt-5 pt-5">
	<div class="text-center row mt-4" style="color: black;">
			<b><h1>Roteiro dos lugares essenciais de Singapura </h1></b>
			<br>
			<h5> Duração recomendada: 3 dias </h5>
	</div>

	<!--PRIMEIRO DIA-->
	<div class="row mt-5">
		<div class="text-center col-5">	
			<h3>PRIMEIRO DIA:</h3>
		</div>
		<div class="text-left col-6">
			<h5>Singapore City Gallery, Chinatown, Boat Quay. </h5>
		</div>
	</div>
	<div class="row ">
		<div class="text-center my-4 col">	
			<p style="text-align: justify;"> Comece o dia cedo na <b>Singapore City Gallery</b>, uma galeria interativa muito interessante, onde você conhece mais da história local e tem acesso a mapas por região. Lá poderá se deparar com uma maquete enorme de uma projeção de Singapura daqui a 100 anos, onde vemos que já está tudo definido para o próximo século. Essa cidade-estado avançou rápido e em pouco tempo, onde pequenas vilas se transformaram em uma metrópole, e Singapura se planejou bem pra isso.<br>
			<br>

			Seguimos conhecendo um pouco mais da cidade, até chegar a <b>Chinatown</b>, um “distrito” da China em que a língua, o comportamento e o comércio ficam diferentes do resto. Para curtir um local como esse, é bom estar de cabeça aberta e atento pra absorver todos os detalhes, e ir sem pressa. Você encontra cafés, mercados, restaurantes e lojas que te fazem sentir que você realmente está em outro país. O lugar é todo interessante, mas tenha certeza que você irá passar por dois lugares especiais: o <i>Buddha Tooth Relic Temple and Museum</i>, que fica menos de 5 minutos partindo da City Gallery, templo com referências do budismo chinês que é uma das principais atrações da Chinatown. Ainda passeando pelas ruas e ruelas do bairro, você encontra o belíssimo templo Hindu <i>Sri Mariamman Temple</i>, que foi construído em 1827, onde rituais acontecem com frequência. Aproveite para descansar um pouco e almoçar por Chinatown mesmo, onde existem centenas de opções de restaurantes com mesas espalhadas pelas calçadas, em ruas onde não passam carros. Tem também os tradicionais food courts (praças de alimentação).<br>
			<br>

			Saindo de Chinatown, em uma caminhada de pouco mais de 10 minutos, chega-se a <b>Boat Quay</b>, lugar onde era o cais por onde chegavam mais da metade das mercadorias em Singapura. Hoje a margem do rio abriga restaurantes, bares e arranha-céus modernos que são a sede de bancos e empresas globais. Passeando por ali você encontra a estátua do Pássaro de Botero e o monumento chamado <i>First Generation</i>, que são crianças brincando às margens do rio. Cruzando o rio para a outra margem, encontra-se um lado mais calmo com museus e galerias. Por ali fica a sede do <i>Ministério da Cultura, Comunidade e Juventude</i>. Ao contrário da arquitetura moderna do centro financeiro de Singapura, o que chama a atenção nesse prédio são suas janelas coloridas.<br>
			<br>

			Pra fechar o dia, a sugestão é ficar pela região de Boat Quay. Assista ao pôr do sol, relaxe, coma alguma coisa. Essa região é bastante movimentada principalmente no fim do dia, quando as pessoas saem do trabalho e vão pra lá curtir um <i>happy hour</i>.
			</p>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<img class="img-fluid" src="images/singapura/gallery.jpg" alt="" style="border-top-left-radius: 20%;">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/singapura/china1.jpg" alt="" style="border-top-right-radius: 20%;">
		</div>
	</div>
	<div class="row mt-4">
		<div class="col posicionar">
			<img class="img-fluid" src="images/singapura/china2.jpg" alt="" style="border-bottom-left-radius: 20%; transform: translateY(-95px);">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/singapura/boatquay.jpg" alt="" style="border-bottom-right-radius: 20%;">
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
					<b>Saiba mais informações sobre a City Gallery</b><br>
					<br><p style="text-align: justify;">Se quiser visitar a galeria, descubra mais informações sobre preços e horários de funcionamento através do site da galeria.<br>
				</div>
				
				<div class="col-5 ml-5 pl-2">
					<b>Descubra informações extras sobre a Chinatown</b><br>
					<br><p style="text-align: justify;">No site da Chinatown irá descobrir mais informações sobre eventos, restaurantes, hotéis e lojas dessa área chinesa em Singapura.</p><br>
				</div>	
				<div class="row text-center mt-4">
					<div class="col-5 mr-4 pl-4">
						<a class="button btn-more" onclick="window.location.href='https://www.ura.gov.sg/Corporate/Singapore-City-Gallery';">Descubra mais</a>
					</div>
					
					<div class="col-5 ml-4 pl-5">
						<a class="button btn-more" onclick="window.location.href='https://chinatown.sg/';">Descubra mais</a>
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
			<h5>Little India, Marina Bay, Gardens by the Bay.</h5>
		</div>
	</div>
	<div class="row ">
		<div class="text-center my-4 col">	
			<p style="text-align: justify;"> 
				A sugestão para o segundo dia é começar o tour conhecendo a <b>Little India</b>, zona em que é possível degustar o melhor da culinária indiana. Aproveite para visitar templos Hindus e o gigante Mustafa Centre, um shopping gigante que fica aberto 24h. Caminhando por 15 minutos a partir de Little India, você chega à Arab Street, o reduto muçulmano em Singapura. Lá você poderá visitar a Sultan Mosque (mesquita) e experimentar a culinária típica em um dos restaurantes locais. Não deixe de andar pela Haji Lane, uma rua hipster cheia de bares, cafés e lojas.<br>
				<br>

				A 10 minutos de caminhada da Arab Street está a <i>Fountain of Wealth</i>, uma fonte situada no meio de um enorme complexo empresarial chamado <i>Suntec City</i>. São cinco prédios que formam um dos maiores complexos de lojas de Singapura. Ande por mais 15 minutos e você chegará em <b>Marina Bay</b>. A primeira coisa que você irá avistar é o Hotel e Cassino <i>Marina Bay Sands</i>, uma das construções mais incríveis do mundo e cartão postal de Singapura. Continue o passeio por Marina Bay e verá outro ícone da cidade, o Merlion, estátua com a cabeça de leão e o corpo de um peixe, remetendo tanto à origem do nome da cidade, quanto ao passado de Singapura, que já foi uma vila de pescadores. A seguir, se dirija à <i>Helix Bridge</i>, uma ponte para pedestres incrível, que remete à cadeia de DNA. Repare, ao andar por ela, que os sinais luminosos no chão fazem menção aos componentes existentes na cadeia. No fim da ponte vemos o <i>ArtScience Museum</i> e o <i>Marina Bay Sands</i>, prédio mais famoso já construído em Singapura até hoje. No topo das torres está uma forma apoiada que lembra um navio, e é ali que está localizada a piscina de borda infinita que tantos viajantes gostariam de conhecer e tirar uma foto. <br>
				<br>

				Seguindo para o último ponto do nosso roteiro, ande pelo subsolo do Marina Bay Sands e passe pela estação de metrô rumo ao <b>Gardens By The Bay</b>. Esse jardim botânico é uma área reservada que abriga jardins, exposições e enormes árvores psicodélicas que fazem com que você se sinta no filme Avatar. Para fechar o roteiro do dia, assista ao show de luzes que é impressionante.<br>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<img class="img-fluid" src="images/singapura/haji.jpg" alt="" style="border-top-left-radius: 20%;">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/singapura/marina1.jpg" alt="" style="border-top-right-radius: 20%;">
		</div>
	</div>
	<div class="row mt-4">
		<div class="col posicionar">
			<img class="img-fluid" src="images/singapura/garden.jpg" alt="" style="border-bottom-left-radius: 20%; transform: translateY(-95px);">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/singapura/marina2.jpg" alt="" style="border-bottom-right-radius: 20%;">
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
					<b>Acesso ao topo de Marina Bay Sands</b><br>
					<br><p style="text-align: justify;">Se deseja subir ao topo sem pagar entrada, basta ir até o bar Cé La Vi, que fica ao lado da piscina, e pedir algo do cardápio. O acesso à piscina só é permitido a hospedes, verifique disponibilidades e preços do hotel.<br>
				</div>
				
				<div class="col-5 ml-5 pl-2">
					<b>Show de luzes no Gardens by the bay</b><br>
					<br><p style="text-align: justify;">Verifique com antecedencia no site os eventos e horários dos shows de luzes, além de dicas especiais de como aproveitar ao máximo esse espaço mágico de Singapura</p> <br>
				</div>	
				<div class="row text-center mt-4">
					<div class="col-5 mr-4 pl-4">
						<a class="button btn-more" onclick="window.location.href='https://www.marinabaysands.com/';">Descubra mais</a>
					</div>
					
					<div class="col-5 ml-4 pl-5">
						<a class="button btn-more" onclick="window.location.href='https://www.gardensbythebay.com.sg/en.html';">Descubra mais</a>
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
			<h5>Ilha de Sentosa, Orchard Road. </h5>
		</div>
	</div>
	<div class="row ">
		<div class="text-center my-4 col">	
			<p style="text-align: justify;"> Nosso roteiro para o terceiro dia é reservado para ir até a <b>A Ilha de Sentosa</b>, considerada atualmente o pólo de entretenimento de Singapura. Apesar de no passado ter sido a base militar de defesa de Singapura, hoje ela abriga complexos hoteleiros, um <i>Hard Rock Café</i> e um parque da <i>Universal Studios</i>, entre outras coisas. Apesar do seu grande crescimento, a ilha ainda possui 70% da sua área coberta de floresta tropical. É lá que fica a maior estátua de Merlion do país, com aproximadamente 40m. Sentosa está ligada ao continente por uma ponte e um teleférico, sendo o autocarro Sentosa Rider a opção mais barata pra chegar na ilha.<br>
			<br>

			Fechando a visita pelo país, vá até a <b>Orchard Road</b>. Nessa região você vive um pouco do espírito de consumo e luxo do país: são centenas de lojas caríssimas, shoppings, letreiros luminosos, tudo incentivando às compras. Ao chegar na Orchard Road pela estação de metro, você já se depara com lojas de luxo nada comuns em outras partes da cidade.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<img class="img-fluid" src="images/singapura/teleferico.jpg" alt="" style="border-top-left-radius: 20%;">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/singapura/sentosa.jpg" alt="" style="border-top-right-radius: 20%;">
		</div>
	</div>
	<div class="row mt-4">
		<div class="col posicionar">
			<img class="img-fluid" src="images/singapura/orchard.jpg" alt="" style="border-bottom-left-radius: 20%; transform: translateY(-95px);">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/singapura/orchard1.jpg" alt="" style="border-bottom-right-radius: 20%;">
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
                                    <img class="img-fluid" alt="100%x280" src="images/singapura/carrot.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Carrot Cake</h4>
                                        <p class="card-text">Apesar da tradução ser bolo de cenoura, a última coisa que vemos no prato é bolo. O <i>carrot cake</i> é uma fritada de ovo com uma massa de arroz e cenoura, uma pitada de alho e rabanete. </p>
                                    </div>
                                </div>
                            </div>

                            <!--Segundo cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/singapura/crab.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Chilli Crab</h4>
                                        <p class="card-text" style="text-align: justify;">O prato consiste num caranguejo gigante cozido em molho de tomate e de pimenta. A ideia é comer com as mãos e se sujar, inclusive alguns restaurantes providenciam toalhas e luvas para tal.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Terceiro cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/singapura/kaya.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Kaya Toast</h4>
                                        <p class="card-text" style="text-align: justify;">Esse é um item que nunca falta no café da manhã. O kaya é uma geleia de coco, que é misturada com a manteiga. É comum ser servido com ovos de gema mole e um copo de chá ou café. </p>
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
                                    <img class="img-fluid" alt="100%x280" src="images/singapura/satay.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Satay</h4>
                                        <p class="card-text" style="text-align: justify;">É uma comida vendida ao ar livre, principalmente durante a noite, em barraquinhas com churrasqueiras montadas para a sua venda. São servidos espetinhos de carne, frango, carneiro e até frutos do mar.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Segundo cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/singapura/chicken.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Chicken Rice</h4>
                                        <p class="card-text" style="text-align: justify;">Esse prato veio do sul da China para o país e se tornou um dos principais pratos nacionais. É preparado com frango picado e arroz branco cozido no caldo do frango com um toque de gengibre e outras especiarias.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Terceiro cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/singapura/charsiew.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Char Siew</h4>
                                        <p class="card-text" style="text-align: justify;">O prato é servido com carne de porco caramelizada, temperada com um molho agridoce sobre uma porção de arroz. Essa combinação deixa a carne adocicada por fora e salgada por dentro.</p>
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