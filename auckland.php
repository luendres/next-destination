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
	

<!-- Auckland Tour -->
<div class="container-fluid p-0">
	<div id="triangle">
		<div class="segmentTriangle">
			<div class="row text-center pt-5 mb-4 container-fluid" style="color: white;">
				<h1><b>Auckland tour</h1></b>
				<p><i>A maior e mais importante cidade da Aotearoa, a também chamada de Nova Zelândia</i></p>
			</div>

<!--Imagens tour-->
			<div class="container">
				<div class="row">
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/auckland/1.jpg" alt="">
						</div>
					</div>
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/auckland/2.jpg" alt="">
						</div>
					</div>
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/auckland/3.jpg" alt="">
						</div>
					</div>
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/auckland/4.jpg" alt="">
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
		<b><h1>Roteiro dos lugares essenciais de Auckland </h1></b>
		<br>
		<h5> Duração recomendada: 3 dias </h5>
	</div>

	<!--PRIMEIRO DIA-->
	<div class="row mt-5">
		<div class="text-center col-5">	
			<h3>PRIMEIRO DIA:</h3>
		</div>
		<div class="text-left col-6">
			<h5>Skytower, Karanga Plaza e Silo Park, Albert Park, Domain Wintergardens. </h5>
		</div>
	</div>
	<div class="row ">
		<div class="text-center my-4 col">	
			<p style="text-align: justify;"> Nosso roteiro para o primeiro dia começa indo até a torre de observação e comunicação <b>Skytower</b>, localizada bem no centro da cidade. Ela tem 328 metros de altura e é possível vê-la praticamente de qualquer parte de Auckland. Ela faz parte do complexo do cassino SkyCity Auckland, que conta com mais de 20 bares e restaurantes, um cassino e um teatro para até 700 espectadores. É possível subir na torre até a área de observação comprando um bilhete. <br>
			<br>

			Seguimos a pé conhecendo um pouco mais da cidade, até chegar ao <b>Karanga Plaza</b>, espaço aberto que fica na orla de Auckland cheio de bancos de madeira com uma bela vista para a cidade. Nela também está um dos centros de informações ao turista. Não longe encontramos o <b>Silo Park</b>, parque que foi estabelecido em torno do silo de cimento Golden Bay, com 35 metros de comprimento, em reconhecimento ao patrimônio industrial da região. O Silo Park oferece vistas impressionantes da Westhaven Marina e da Auckland Harbour Bridge.<br>
			<br>

			Continuamos o passeio pela cidade em direção ao <b>Albert Park</b>, parque popular que fica no centro. A história e o design do parque tornaram-no em um local importante para os moradores de Auckland. No parque existe uma elaborada fonte vitoriana, partes das velas de um navio e uma estátua da Rainha Vitória, que foi inaugurada em 1899 para celebrar o 60º ano de seu reinado.<br>
			<br>

			Por último, siga até ao Parque Auckland Domain, onde encontrarás o <b>Domain Wintergardens</b>, belo jardim que foi projetado no início de 1900 e inaugurado em 1913. Plantas exóticas e raras podem ser vistas em cada uma das duas casas de vidro em estilo vitoriano. Na parte da frente das casas existe um extenso pátio e uma piscina afundada. A entrada é gratuita e vale a pena!
			</p>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<img class="img-fluid" src="images/auckland/sky.jpg" alt="" style="border-top-left-radius: 20%;">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/auckland/silo.jpg" alt="" style="border-top-right-radius: 20%;">
		</div>
	</div>
	<div class="row mt-4">
		<div class="col posicionar">
			<img class="img-fluid" src="images/auckland/albert.jpg" alt="" style="border-bottom-left-radius: 20%; transform: translateY(-95px);">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/auckland/gardens.jpg" alt="" style="border-bottom-right-radius: 20%;">
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
					<b>Subida na área de observação da torre</b><br>
					<br><p style="text-align: justify;">Se quiser subir na torre de mais de 300 metros de altura e contemplar a uma bela vista sobre a cidade, deverá comprar um bilhete para tal. <br>
				</div>
				
				<div class="col-5 ml-5 pl-2">
					<b>Visita o Domain Wintergardens</b><br>
					<br><p style="text-align: justify;">A visita ao complexo de jardins é gratuita, mas vale conferir os horários de abertura e épocas de funcionamento no site.</p><br>
				</div>	
				<div class="row text-center mt-4">
					<div class="col-5 mr-4 pl-4">
						<a class="button btn-more" onclick="window.location.href='skycityauckland.co.nz';">Descubra mais</a>
					</div>
					
					<div class="col-5 ml-4 pl-5">
						<a class="button btn-more" onclick="window.location.href='https://www.gardens.org.nz/auckland-gardens/auckland-domain-wintergardens/';">Descubra mais</a>
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
			<h5>Queen Street, Aotea Square, Mount Eden, Newmarket.</h5>
		</div>
	</div>
	<div class="row ">
		<div class="text-center my-4 col">	
			<p style="text-align: justify;"> 
				A sugestão para o segundo dia é começar o tour conhecendo a <b>Queen Street</b>, principal via comercial do Auckland CBD (City Business District) com quase 3km de extensão. Aqui encontrarás muitas lojas, shoppings, restaurantes, bares e cafés. Perca algum tempo conhecendo o que há por oferecer nessa rua importante da cidade.<br>

				<br>Depois, siga para a grande praça ao céu aberto <b>Aotea Square</b>, que fica bem no centro da cidade, ao lado da Queen Street. O local é usado para concertos e encontros ao ar livre, além de mercados e manifestações políticas. Após uma grande reforma em 2010, a praça foi redesenhada para dar espaço para um grande número de pessoas, permitindo que até 20 mil pessoas estejam no local ao mesmo tempo. A prefeitura da cidade fica localizada em um prédio de arquitetura eduardiana na entrada da praça.<br>
				<br>

				Seguindo para o próximo ponto do nosso roteiro, o <b>Monte Éden</b> está localizado a 4 Km do centro, e é o vulcão inativo mais alto de Auckland. A última erupção foi de cerca de 15.000 anos atrás, e deixou uma cratera de 50 metros de profundidade. No topo do monte a paisagem é de tirar o fôlego, é possível ter uma vista panorâmica de toda a cidade. É acessível de autocarro, mas se quiser ir caminhando o trajeto demora cerca de 1 hora. A entrada é gratuita.<br>
				<br>

				Para acabar o roteiro do dia, siga até ao distrito comercial de <b>Newmarket</b>, localizado ao nordeste do Monte Éden, considerada a principal área de varejo de Auckland. A rua principal possui grandes shopping centers, restaurantes, cafés e lojas de varejo (mais de 400).
			<br></p>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<img class="img-fluid" src="images/auckland/queen.jpg" alt="" style="border-top-left-radius: 20%;">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/auckland/aotea.jpg" alt="" style="border-top-right-radius: 20%;">
		</div>
	</div>
	<div class="row mt-4">
		<div class="col posicionar">
			<img class="img-fluid" src="images/auckland/mteden.jpg" alt="" style="border-bottom-left-radius: 20%; transform: translateY(-95px);">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/auckland/Newmarket.jpg" alt="" style="border-bottom-right-radius: 20%;">
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
					<b>Visite os pontos principais da cidade de autocarro</b><br>
					<br><p style="text-align: justify;">Se deseja visitar mais pontos turísticos da cidade e sente que o tempo está curto, opte por um <i>bus tour</i> que oferecem o serviço de rodar pela cidade por todos os lugares mais importantes a se conhecer.<br>
				</div>
				
				<div class="col-5 ml-5 pl-2">
					<b>Descubra novos eventos a acontecer na Aotea Square</b><br>
					<br><p style="text-align: justify;"> Por ser um espaço público ao ar livre, a praça está aberta todos os dias, o ano todo. Mas frequentemente ocorrem eventos como o <i>Festival de Artes de Auckland</i>, que necessitam de compra de bilhetes. Confira no site os eventos que irão acontecer!</p> <br>
				</div>	
				<div class="row text-center mt-4">
					<div class="col-5 mr-4 pl-4">
						<a class="button btn-more" onclick="window.location.href='https://www.explorerbus.co.nz/';">Descubra mais</a>
					</div>
					
					<div class="col-5 ml-4 pl-5">
						<a class="button btn-more" onclick="window.location.href='https://www.aucklandlive.co.nz/venue/aotea-square';">Descubra mais</a>
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
			<h5>Bate e volta para Hobbiton. </h5>
		</div>
	</div>
	<div class="row ">
		<div class="text-center my-4 col">	
			<p style="text-align: justify;"> Nosso roteiro para o terceiro dia é reservado para ir até a região de Matamata, conhecer a cidade cenográfica <b>Hobbiton</b>, do filme <i>O Senhor dos Anéis</i> e <i>O Hobbit</i>. Existem várias formas de ir até lá, nossa sugestão é comprar um pacote que inclua ida e volta de autocarro para Matamata e o ingresso para Hobbiton. O tour custa em média NZ$150 por pessoa.<br>
			<br>

			O autocarro vindo de Auckland para em frente ao centro de informação ao turista da cidade de Matamata, onde está outro autocarro que leva os turistas até a cidade cenográfica. Neste segundo o motorista já começa a explicação da história do lugar e onde que fica Hobbiton.<br>
			<br>

			Como o local fica em uma propriedade privada, todos os visitantes precisam entrar na fazenda com o autocarro do <b>Hobbiton Movie Set</b>. Todas as visitas são guiadas e feita em grupos. Neste local mágico da terra média onde as aventuras de Frodo e Bilbo começaram, é possível ver cada detalhe das casas e buracos. No final da visita tem degustação das bebidas no <i>Green Dragon Inn</i>. Depois da visita, o autocarro retorna para Matamata.  
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<img class="img-fluid" src="images/auckland/hobbiton1.jpg" alt="" style="border-top-left-radius: 20%;">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/auckland/hobbiton2.jpg" alt="" style="border-top-right-radius: 20%;">
		</div>
	</div>
	<div class="row mt-4">
		<div class="col posicionar">
			<img class="img-fluid" src="images/auckland/hobbiton3.jpg" alt="" style="border-bottom-left-radius: 20%; transform: translateY(-95px);">
		</div>
		<div class="col pl-2">
				<img class="img-fluid" src="images/auckland/bar.jpg" alt="" style="border-bottom-right-radius: 20%;">
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
                                    <img class="img-fluid" alt="100%x280" src="images/auckland/pavlova.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Pavlova</h4>
                                        <p class="card-text">É a sobremesa mais conhecida no país inteiro, existindo uma disputa com a Austrália sobre quem inventou o doce. É uma torta com textura de suspiro, recheada com marshmalow cremoso e decorada com frutas, geralmente kiwis.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Segundo cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/auckland/cod.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Blue Cod</h4>
                                        <p class="card-text" style="text-align: justify;"> É um tipo de bacalhau azul de águas temperadas encontrado exclusivamente na Nova Zelândia, em águas rasas ao redor das costas rochosas, a uma profundidade de 150m. É mais comum de encontrar na Ilha Sul do país. </p>
                                    </div>
                                </div>
                            </div>

                            <!--Terceiro cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/auckland/hangi.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Hangi</h4>
                                        <p class="card-text" style="text-align: justify;">Uma das celebrações mais simbólicas dos maori, primeiros habitantes do país, é se reunir em grandes grupos e preparar o famoso hangi, prato que consiste em carne, frango e legumes assados debaixo da terra.</p>
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
                                    <img class="img-fluid" alt="100%x280" src="images/auckland/lamb.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Cordeiro de Canterbury</h4>
                                        <p class="card-text" style="text-align: justify;">A carne de cordeiro neozelandês é exportado para muitos países da Europa e Ásia. É vasto o uso deste tipo de carne na culinária caseira e apesar de facilmente encontrado nos mercados e restaurantes, é mais popular na Ilha Sul do país.  </p>
                                    </div>
                                </div>
                            </div>

                            <!--Segundo cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/auckland/mussels.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">New Zealand Mussels</h4>
                                        <p class="card-text" style="text-align: justify;"> Os também chamados de <i>Mexilhões de Lábios Verdes</i>, são encontrados apenas na Nova Zelândia. Frutos do mar são uma das maiores e mais favoritas fontes de proteína do país, ir até lá e não comer frutos do mar é praticamente impossível. </p>
                                    </div>
                                </div>
                            </div>

                            <!--Terceiro cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/auckland/feijoa.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Feijoa</h4>
                                        <p class="card-text" style="text-align: justify;">Embora seja uma fruta originária da América do Sul, foi na Nova Zelândia que ela encontrou popularidade. Tem uma textura muito parecida com a goiaba, porém é menor e com um sabor adocicado mais suave, quando madura.</p>
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