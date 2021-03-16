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


<!-- RJ Tour -->
<div class="container-fluid p-0">
	<div id="triangle">
		<div class="segmentTriangle">
			<div class="row text-center pt-5 mb-4 container-fluid" style="color: white;">
				<h1><b>Rio de Janeiro tour</h1></b>
				<p><i>A Cidade Maravilhosa é opção de viagem certeira para quem gosta de praias, natureza, cultura e diversão</i></p>
			</div>

<!--Imagens tour-->
			<div class="container">
				<div class="row">
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/rj/1.jpg" alt="">
						</div>
					</div>
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/rj/2.jpg" alt="">
						</div>
					</div>
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/rj/3.jpg" alt="">
						</div>
					</div>
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/rj/4.jpg" alt="">
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
		<b><h1>Roteiro dos lugares essenciais de Rio de Janeiro </h1></b>
		<br>
		<h5> Duração recomendada: 3 dias </h5>
	</div>

	<!--PRIMEIRO DIA-->
	<div class="row mt-5">
		<div class="text-center col-5">	
			<h3>PRIMEIRO DIA:</h3>
		</div>
		<div class="text-left col-6">
			<h5>Cristo Redentor, Copacabana, Ipanema, Pedra do Arpoador. </h5>
		</div>
	</div>
	<div class="row ">
		<div class="text-center my-4 col">	
			<p style="text-align: justify;"> Comece o tour pelo Rio fazendo alguns dos programas mais clássicos da cidade. Pela manhã, aproveite para conhecer o <b>Cristo Redentor</b>, estátua que fica no alto do morro do Corcovado. Existem diferentes formas de chegar até lá. A forma mais tradicional é com o <i>Trem do Corcovado</i>, que sobe em meio à <i>Floresta da Tijuca</i>, proporcionando um belo visual durante o passeio. Há também as vans que levam os turistas até o Corcovado, que funcionam todos os dias, com saídas de Copacabana, Largo do Machado e Barra da Tijuca. <br>
			<br>

			Depois de conhecer o principal cartão-postal da cidade, nada melhor que aproveitar um pouco das praias do Rio de Janeiro. <b>Copacabana</b> e <b>Ipanema</b> são as duas praias mais famosas da cidade e ficam próximas uma da outra. Dá para fazer uma caminhada pelo calçadão de Copacabana, onde ficam as estátuas de famosos como <i>Carlos Drummond de Andrade</i> e <i>Dorival Caymmi</i>. Em seguida, a dica é fazer um lanche na <i>Confeitaria Colombo</i>, do Forte de Copacabana. Por fim, opte por passear pelo calçadão de Ipanema, aproveitando para tirar uma foto com a estátua de <i>Tom Jobim</i> e curtir um dos vários quiosques da orla, que é muito bem estruturada.<br>
			<br>
			
			Pra fechar o dia, a dica é outro clássico carioca: ver o pôr do sol na <b>Pedra do Arpoador</b>, que fica entre as duas praias – Copacabana e Ipanema. A vista do pôr do sol é espetacular e muito concorrida, sempre tem muita gente disputando um lugar na pedra. A tradição carioca manda aplaudir quando o sol se põe.
			</p>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<img class="img-fluid" src="images/rj/cristo.jpg" alt="" style="border-top-left-radius: 20%;">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/rj/copacabana.jpg" alt="" style="border-top-right-radius: 20%;">
		</div>
	</div>
	<div class="row mt-4">
		<div class="col posicionar">
			<img class="img-fluid" src="images/rj/tom.jpg" alt="" style="border-bottom-left-radius: 20%; transform: translateY(-95px);">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/rj/arpoador.jpg" alt="" style="border-bottom-right-radius: 20%;">
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
					<b>Subir no Corcovado com o comboio</b><br>
					<br><p style="text-align: justify;">A dica para quem escolhe esta forma de subir no morro para ver o Cristo Redentor é comprar o ingresso com antecedência pela internet, porque na hora sempre tem fila e isso pode atrasar muito o passeio.<br>
				</div>
				
				<div class="col-5 ml-5 pl-2">
					<b>Se quiser descubrir mais da cidade a pé</b><br>
					<br><p style="text-align: justify;">Existem diversos <i>free walking tours</i> no Rio de Janeiro, com passeios todos os dias em áreas diferentes da Cidade Maravilhosa. Não é necessário reservar, apenas apareça no ponto de encontro no horário marcado! </p><br>
				</div>	
				<div class="row text-center mt-4">
					<div class="col-5 mr-4 pl-4">
						<a class="button btn-more" onclick="window.location.href='https://www.tremdocorcovado.rio/';">Descubra mais</a>
					</div>
					
					<div class="col-5 ml-4 pl-5">
						<a class="button btn-more" onclick="window.location.href='https://freewalkertours.com/pt-br/';">Descubra mais</a>
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
			<h5>Lagoa Rodrigo de Freitas, Parque Lage, Jardim Botânico.</h5>
		</div>
	</div>
	<div class="row ">
		<div class="text-center my-4 col">	
			<p style="text-align: justify;"> 
			Nosso roteiro para o segundo dia começa conhecendo a <b>Lagoa Rodrigo de Freitas</b>, uma lagoa de água salgada que tem comunicação com o mar. Ao seu redor há uma pista de caminhada e ciclismo, que no total tem cerca de 7km de comprimento, além de quiosques para tomar água de coco e também restaurantes que podem ser uma opção para o almoço.<br>
			<br>

			Depois de caminhar e conhecer um pouco mais da lagoa, seguimos para dois espaços verdes que ficam ali perto e que valem muito uma visita. O <b>Parque Lage</b> fica em meio à floresta nativa de Mata Atlântica, com lagos, cavernas, muita sombra, e é um ótimo lugar para fazer piqueniques – tudo isso com uma bela vista do Cristo Redentor. Além da área verde, o Parque Lage tem ainda um casarão do século XIX onde acontecem cursos de arte e um café com mesas ao redor de uma piscina.<br>
			<br>

			Para completar o roteiro do dia, siga até o <b>Jardim Botânico</b>, que fica bem próximo do Parque Lage. Este foi fundado por Dom João VI no começo do século XIX e tem como destaque principal o corredor cheio de palmeiras imperiais que rende fotos incríveis. Conta também com outros tipos de árvores, algumas delas centenárias, lago com vitórias-régias, orquidário, Jardim Japonês, espaço cultura e grande diversidade de plantas. Pra fechar a noite, a dica é curtir algum dos restaurantes do próprio bairro do Jardim Botânico ou ainda seguir para um dos animados bares da região vizinha, o <i>Baixo Gávea</i>.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<img class="img-fluid" src="images/rj/lagoa.jpg" alt="" style="border-top-left-radius: 20%;">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/rj/lage2.jpg" alt="" style="border-top-right-radius: 20%;">
		</div>
	</div>
	<div class="row mt-4">
		<div class="col posicionar">
			<img class="img-fluid" src="images/rj/botanico1.jpg" alt="" style="border-bottom-left-radius: 20%; transform: translateY(-95px);">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/rj/botanico2.jpg" alt="" style="border-bottom-right-radius: 20%;">
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
					<b>Visitar o Parque Lage</b><br>
					<br><p style="text-align: justify;">A visita ao parque é gratuita ao público, mas vale entrar no site para saber mais sobre horários de funcionamento e também a melhor forma de chegar lá<br>
				</div>
			
				<div class="col-5 ml-5 pl-2">
					<b>Visitar o Jardim Botânico</b><br>
					<br><p style="text-align: justify;">Se deseja visitar o jardim, entre no site oficial e descubra mais sobre os horários e dias de funcionamento, além dos preços dos bilhetes de admissão. </p> <br>
				</div>	
				<div class="row text-center mt-4">
					<div class="col-5 mr-4 pl-4">
						<a class="button btn-more" onclick="window.location.href='http://visit.rio/que_fazer/parque-lage/';">Descubra mais</a>
					</div>
					
					<div class="col-5 ml-4 pl-5">
						<a class="button btn-more" onclick="window.location.href='http://jbrj.gov.br/';">Descubra mais</a>
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
			<h5>Pão de Açúcar, Urca, Santa Teresa.</h5>
		</div>
	</div>
	<div class="row ">
		<div class="text-center my-4 col">	
			<p style="text-align: justify;">A sugestão para o terceiro e último dia é fechar o roteiro na Cidade Maravilhosa com outro passeio clássico, indo no <b>Bondinho do Pão de Açúcar</b>. A vista que se tem lá do alto é uma das mais bonitas do Rio de Janeiro. O valor da entrada varia de acordo do tipo de passeio – tradicional, visita guiada, tour histórico, entre outros. Se você deseja economizar e curte caminhadas, também é possível visitar o <i>Morro da Urca</i>, primeira parada do Bondinho do Pão de Açúcar, através de uma trilha completamente gratuita. Caso queira, você pode comprar o bilhete para terminar o passeio, indo até a segunda estação do bondinho, no Morro do Pão de Açúcar. Ou finalizar o passeio ali mesmo no Morro da Urca, voltando pela trilha da Urca, de graça.<br>
			<br>

			Saindo do Pão de Açúcar, aproveite para circular pelo bairro da <b>Urca</b>, um dos mais tradicionais bairros do Rio de Janeiro, conhecido por seus contornos irregulares e grandes morros. Lá encontrará a pequena <i>Praia Vermelha</i>, que fica situada entre o Morro da Babilônia e o Morro da Urca, oferecendo uma vista impressionante para o Pão de Açúcar. Apesar de suas areias claras e limpas, é imprópria para banhos por ser banhada pelas águas da <i>Baía de Guanabara</i>.De lá, siga para o centro onde fecharemos o passeio em outro bondinho.<br>
			<br>
				
			Para o último passeio do dia, iremos andar no <i>Bonde de Santa Teresa</i>, que nos levará até o bairro boêmio de <b>Santa Teresa</b>, tudo com o charme e o estilo dos bondes de antigamente. No trajeto, o bonde passa por cima dos <i>Arcos da Lapa</i>, chegando até o bairro de Santa Teresa que é cheio de arte, cultura e, claro, muitos bares e restaurantes. Se tiver tempo, visite o Parque das Ruínas, o Museu Chácara do Céu e, por fim, a Escadaria Selarón.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<img class="img-fluid" src="images/rj/morro.jpg" alt="" style="border-top-left-radius: 20%;">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/rj/bonde.jpg" alt="" style="border-top-right-radius: 20%;">
		</div>
	</div>
	<div class="row mt-4">
		<div class="col posicionar">
			<img class="img-fluid" src="images/rj/praia.jpg" alt="" style="border-bottom-left-radius: 20%; transform: translateY(-95px);">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/rj/santa.jpg" alt="" style="border-bottom-right-radius: 20%;">
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
                                    <img class="img-fluid" alt="100%x280" src="images/rj/coxinha.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Coxinha</h4>
                                        <p class="card-text" style="text-align: justify;">É um salgadinho brasileiro feito com massa de farinha de trigo e caldo de galinha, recheada tradicionalmente com frango e catupiry, mas podendo ter também de queijo, calabresa ou outros sabores.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Segundo cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/rj/brigadeiro.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Brigadeiro</h4>
                                        <p class="card-text" style="text-align: justify;">É um doce tipicamente brasileiro, considerado a sobremesa mais amada em todo o país. Muito comum em festas de aniversário, é feito de leite condensado, chocolate em pó e manteiga. </p>
                                    </div>
                                </div>
                            </div>

                            <!--Terceiro cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/rj/pao.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Pão de Queijo</h4>
                                        <p class="card-text" style="text-align: justify;"> Apesar de ser chamado de "pão", consiste em um tipo de biscoito de polvilho azedo ou doce acrescido de ovos, sal, óleo vegetal e queijo, de consistência macia e elástica, existindo pequenas variações.</p>
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
                                    <img class="img-fluid" alt="100%x280" src="images/rj/acai.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Açaí</h4>
                                        <p class="card-text" style="text-align: justify;">É um fruto geralmente preparado da sua polpa congelada batida com xarope de guaraná, gerando uma pasta parecida com um sorvete, ocasionalmente adicionando frutas e cereais.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Segundo cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/rj/pastel.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Pastel de Feira</h4>
                                        <p class="card-text" style="text-align: justify;">É feito de uma massa à base de farinha a que se dá a forma de um envelope, onde se recheia e depois se frita por imersão em óleo. Encontrado facilmente em carrinhos de rua e centros de comércio no Brasil. </p>
                                    </div>
                                </div>
                            </div>

                            <!--Terceiro cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/rj/feijoada.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Feijoada à brasileira</h4>
                                        <p class="card-text" style="text-align: justify;">É um prato que consiste num guisado de feijões-pretos com vários tipos de carne de porco e de boi. Servida com farofa, arroz branco, couve refogada e laranja fatiada, entre outros acompanhamentos.</p>
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