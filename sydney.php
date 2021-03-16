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

<!-- Sydney Tour -->
<div class="container-fluid p-0">
	<div id="triangle">
		<div class="segmentTriangle">
			<div class="row text-center pt-5 mb-4 container-fluid" style="color: white;">
				<h1><b>Sydney tour</h1></b>
				<p><i>A maior e mais icónica cidade australiana</i></p>
			</div>

<!--Imagens tour-->
			<div class="container">
				<div class="row">
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/sydney/1.jpg" alt="">
						</div>
					</div>
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/sydney/2.jpg" alt="">
						</div>
					</div>
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/sydney/3.jpg" alt="">
						</div>
					</div>
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/sydney/4.jpg" alt="">
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
		<b><h1>Roteiro dos lugares essenciais de Sydney </h1></b>
		<br>
		<h5> Duração recomendada: 3 dias </h5>
	</div>

<!--PRIMEIRO DIA-->
	<div class="row mt-5">
		<div class="text-center col-5">	
			<h3>PRIMEIRO DIA:</h3>
		</div>
		<div class="text-left col-6">
			<h5>Hyde Park, Opera House, Circular Quay, Harbour Bridge e Pylon Lookout. </h5>
		</div>
	</div>
	<div class="row ">
		<div class="text-center my-4 col">	
			<p style="text-align: justify;"> Nosso roteiro para o primeiro dia começa indo até o <b>Hyde Park</b>, parque mais antigo da Austrália. O espaço é bem grande e é dividido em 2 partes através do Park Street. Na parte sul do parque se encontra Anzac Memorial, um memorial para aqueles que morreram durante as guerras, e na parte norte existe uma linda fonte.<br>
			<br>

			Continuamos o passeio caminhando e descobrindo um pouco mais da cidade. Siga para o principal cartão postal da cidade, a casa de Ópera de Sydney. Inaugurado em 1973, o <b>Sydney Opera House</b> recebe mais de 1.600 apresentações por ano em suas salas de concertos e teatros. <br>
			<br>

			A seguir, conheça a <b>Circular Quay</b>, porto que serve como terminal de balsas para a cidade. Sua área é um bairro popular para o turismo e possui shoppings, parques, restaurantes, bares e cafés.<br>
			<br>

			Por último, siga até outro cartão postal de Sydney, a <b>Harbour Bridge</b>, uma bela ponte de aço construída em formato de arco. Na torre do lado sul da ponte se encontra o <b>Pylon Lookout</b>, um mirante que fica na parte alta da torre, onde é possível ter uma bela vista do porto e da cidade. Atenção, a subida na torre é paga. Se ainda tiver energia para conhecer mais um ponto interessante na cidade, vá até o <b>Observatory Hill Park</b>, pequeno parque que fica em uma colina bem próximo a Harbour Bridge. Sua história remonta a 1796, quando foi usado como o local do primeiro moinho de vento na colônia. Hoje é um local popular para moradores e visitantes desfrutarem das vistas do porto.
			</p>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<img class="img-fluid" src="images/sydney/hydepark.jpg" alt="" style="border-top-left-radius: 20%;">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/sydney/opera.jpg" alt="" style="border-top-right-radius: 20%;">
		</div>
	</div>
	<div class="row mt-4">
		<div class="col posicionar">
			<img class="img-fluid" src="images/sydney/circular.jpg" alt="" style="border-bottom-left-radius: 20%; transform: translateY(-95px);">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/sydney/harbour.jpg" alt="" style="border-bottom-right-radius: 20%;">
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
					<b>Subida ao Pylon Lookout</b><br>
					<br><p style="text-align: justify;">Se quiser subir na torre e contemplar a uma bela vista sobre a cidade, deverá comprar um bilhete para tal. <br>
				</div>
				
				<div class="col-5 ml-5 pl-2">
					<b>Visita à Opera House</b><br>
					<br><p style="text-align: justify;">É possível fazer visita guiada para conhecer o interior do ponto turístico mais famoso de Sydney. Para mais informações sobre preços e horários, acesse o <i>"Descubra mais"</i></p><br>
				</div>	
				<div class="row text-center mt-4">
					<div class="col-5 mr-4 pl-4">
						<a class="button btn-more" onclick="window.location.href='pylonlookout.com.au';">Descubra mais</a>
					</div>
					
					<div class="col-5 ml-4 pl-5">
						<a class="button btn-more" onclick="window.location.href='sydneyoperahouse.com';">Descubra mais</a>
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
			<h5>Bondi Beach e praias nos arredores, Pitt Street Mall,  Queen Victoria Building, Darling Harbour. </h5>
		</div>
	</div>
	<div class="row ">
		<div class="text-center my-4 col">	
			<p style="text-align: justify;"> 
				A sugestão para o segundo dia é começar o tour conhecendo uma das praias mais famosas da Austrália, a <b>Bondi Beach</b>, que atrai turistas durante o ano todo. Com seu mar perfeito para o surfe, Bondi é muito descolada, apresentando um centrinho agradável, cheio de lojas de rua, cafés, grafites de todas as formas e gostos que enfeitam a praia que já é bonita por si só. É uma visita obrigatória em sua passagem na cidade. No final da praia fica a piscina que é um dos lugares mais fotografados da cidade, a <i>Bondi Icebergs Swimming Club</i>. São duas piscinas olímpicas no meio do mar! Aproveite para caminhar mais e descobrir também outras diversas praias nos arredores de Bondi Beach. Para ir até lá, o aconselhável é pegar o autocarro 333 ou o 380 direto no Circular Quay, em Sydney Harbour.<br>

				<br>Depois de descobrir algumas das praias dos arredores de Sydney, volte de autocarro para o centro para conhecer mais um pouco da cidade. Caminhe até o <b>Pitt Street Mall</b>, área comercial mais movimentada e cosmopolita da Austrália, com várias lojas de varejo e de marca.<br>
				<br>

				Siga então para o <b>Queen Victoria Building</b>, edifício construído na década de 1890 e erguido como um Mercado Municipal na escala de uma catedral. Já foi citado por Pierre Cardin como “o shopping center mais bonito do mundo” e atualmente ocupa um quarteirão, tendo mais de 180 lojas e boutiques de moda, além de restaurantes e cafés.<br>
				<br>

				Para acabar o roteiro do dia, siga até a <b>Darling Harbour</b>, famoso porto que fica na parte leste de Sydney. É um grande local de lazer, possui diversas atrações como museus, shoppings e roda gigante. Além disso, é o local ideal para embarcar em vários passeios que exploram a Baía de Sydney.<br>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<img class="img-fluid" src="images/sydney/bondi.jpg" alt="" style="border-top-left-radius: 20%;">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/sydney/pitt.jpg" alt="" style="border-top-right-radius: 20%;">
		</div>
	</div>
	<div class="row mt-4">
		<div class="col posicionar">
			<img class="img-fluid" src="images/sydney/queen.jpg" alt="" style="border-bottom-left-radius: 20%; transform: translateY(-95px);">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/sydney/darling.jpg" alt="" style="border-bottom-right-radius: 20%;">
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
					<b>Visita as praias de autocarro</b><br>
					<br><p style="text-align: justify;">Se deseja visitar as praias nos arredores de Sydney como Bondi Beach e outras na chamada <i>Rota Azul</i>, existem bus tours que oferecem o serviço, além de também rodarem pela cidade.<br>
				</div>
				
				<div class="col-5 ml-5 pl-2">
					<b>Se deseja experimentar a piscina de Bondi Beach</b><br>
					<br><p style="text-align: justify;">Caso queira entrar nas piscinas, é só pagar o ingresso no local, sem restrição de horário, exceto pela sua abertura e fechamento. Além da piscina, no clube também fica um bistrô, que oferece maravilhosos pratos e drinks. </p> <br>
				</div>	
				<div class="row text-center mt-4">
					<div class="col-5 mr-4 pl-4">
						<a class="button btn-more" onclick="window.location.href='https://www.bigbustours.com/en/sydney/sydney-sightseeing-tours/';">Descubra mais</a>
					</div>
					
					<div class="col-5 ml-4 pl-5">
						<a class="button btn-more" onclick="window.location.href='https://icebergs.com.au/swimming-pool/swimming-members/';">Descubra mais</a>
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
			<h5>Bate e volta para as Blue Mountains. </h5>
		</div>
	</div>
	<div class="row ">
		<div class="text-center my-4 col">	
			<p style="text-align: justify;"> Nosso roteiro para o terceiro dia começa cedo e é reservado para conhecer uma das principais atrações da região de Sydney, o <b>Blue Mountains National Park</b>. O parque é formado por várias montanhas rochosas e vales profundos, que combinados formam vistas surpreendentes onde é possível estar em meio a selva em menos de 2 horas de distância da cidade grande. É uma região linda, cheia de cachoeiras, árvores que ficam azuladas dependendo da hora do dia e trilhas com animais selvagens.<br>
			<br>
			O acesso para chegar no parque é facilitado, deverá ir até a estação central e pegar o comboio em direção a <i>Katoomba</i>. A viagem demora cerca de 2 horas. Verifique também a previsão do tempo, pois se estiver muito nublado ou chovendo, não será possível ver muita coisa das paisagens. Ao chegar na estação de Katoomba, você pode caminhar até o mirante principal, que dura cerca de 25 minutos, ou pegar um autocarro até lá. <br>
			<br>
			O <b>Echo Point lookout (Three Sisters)</b> é o principal mirante para observar a formação rochosa das três irmãs e porta de entrada para as trilhas existentes. As três irmãs são 3 formações rochosas com aspectos incomuns que se destacam nas montanhas. De lá comece a caminhar pelo caminho <i>Prince Henry Cliff Walk</i>, a trilha possui um trajeto relativamente fácil. Caso você não queira andar muito, existe uma empresa que presta serviço de bondinho e funicular em alguns pontos do parque, a <i>Scenic World</i>. Basta passar no centro de informação ao turista no Echo Point lookout. 
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<img class="img-fluid" src="images/sydney/blue.jpg" alt="" style="border-top-left-radius: 20%;">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/sydney/threesisters.jpg" alt="" style="border-top-right-radius: 20%;">
		</div>
	</div>
	<div class="row mt-4">
		<div class="col posicionar">
			<img class="img-fluid" src="images/sydney/cascate.jpg" alt="" style="border-bottom-left-radius: 20%; transform: translateY(-95px);">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/sydney/teleferico.jpg" alt="" style="border-bottom-right-radius: 20%;">
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
                                    <img class="img-fluid" alt="100%x280" src="images/sydney/pie.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Meat Pie</h4>
                                        <p class="card-text">Considerada até um dos pratos nacionais, as tortas salgadas possuem vários sabores, sendo que a mais comum é a de carne picada. Essas tortas são servidas em tamanhos individuais e é uma ótima opção para almoço rápido, por exemplo.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Segundo cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/sydney/fish.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Fish and Chips</h4>
                                        <p class="card-text" style="text-align: justify;">Os locais dizem que é uma das comidas típicas da Austrália, apesar da fama maior ser da Inglaterra. Em muitos pubs você encontra um bom peixe frito empanado com batatas fritas. Aproveite para provar com o peixe barramundi, bem saboroso e comum no país.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Terceiro cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/sydney/lamington.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Lamington</h4>
                                        <p class="card-text" style="text-align: justify;">Considerado o “Bolo Nacional da Australia” com até seu próprio dia nacional (21 de Junho), o lamington é um bolo esponjoso em forma de cubo com uma camada de cobertura de chocolate e coco ralado. Você o encontra em mercado, padarias ou cafés em várias cidades.</p>
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
                                    <img class="img-fluid" alt="100%x280" src="images/sydney/vegemite.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Vegemite</h4>
                                        <p class="card-text" style="text-align: justify;">É uma  geléia de vegetal que se come com pão ou torradas. Feita de extrato de levedura, livre de gorduras e uma fonte de vitamina B e acido fólico. É a "comfort food" que tem na casa de todo australiano. Lembre-se que a camada de vegemite que se passa no pão precisa ser bem fina! </p>
                                    </div>
                                </div>
                            </div>

                            <!--Segundo cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/sydney/timtam.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Tim Tam</h4>
                                        <p class="card-text" style="text-align: justify;"> A bolacha é um dos produtos mais icônico do país, os australianos comem 45 milhões de pacotes por ano! Você pode comer a bolacha sozinha ou então do jeito dele, mordendo as laterais do biscoito e o fazendo de canudo para tomar com chá ou leite. </p>
                                    </div>
                                </div>
                            </div>

                            <!--Terceiro cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/sydney/ginger.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Ginger Beer</h4>
                                        <p class="card-text" style="text-align: justify;">Apesar do nome ser "cerveja", não há praticamente nada de álcool nesse refresco com gosto de gengibre. Além do <i>ginger beer</i> com sabor gengibre, tem também versões de frutas tropicais ou outras misturas que você encontra nas prateleiras dos supermercados da Austrália.</p>
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