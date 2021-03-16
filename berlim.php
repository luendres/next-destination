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
	
<!-- Berlim Tour -->
<div class="container-fluid p-0">
	<div id="triangle">
		<div class="segmentTriangle">
			<div class="row text-center pt-5 mb-4 container-fluid" style="color: white;">
				<h1><b>Berlim tour</h1></b>
				<p><i>Mais que um centro hipster da Alemanha</i></p>
			</div>
		

<!--Imagens tour-->
			<div class="container">
				<div class="row">
					<div class="col-6 col-md-3 col-sm-5 ">
						<div class="position-relative">
							<img class="img-fluid" src="images/berlim/1.jpg" alt="">
						</div>
					</div>
					<div class="col-6 col-md-3 col-sm-5 ">
						<div class="position-relative">
							<img class="img-fluid" src="images/berlim/2.jpg" alt="">
						</div>
					</div>
					<div class="col-6 col-md-3 col-sm-5 ">
						<div class="position-relative">
							<img class="img-fluid" src="images/berlim/3.jpg" alt="">
						</div>
					</div>
					<div class="col-6 col-md-3 col-sm-5 ">
						<div class="position-relative">
							<img class="img-fluid" src="images/berlim/4.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Descrição tour-->
<div class="container mt-5 pt-5">
	<div class="text-center row mt-4">
		<b><h1>Roteiro dos lugares essenciais de Berlim </h1></b>
		<br>
		<h5> Duração recomendada: 3 dias </h5>
	</div>


	<!--PRIMEIRO DIA-->
	<div class="row mt-5">
		<div class="text-center col-5">	
			<h3>PRIMEIRO DIA:</h3>
		</div>
		<div class="text-left col-6">
			<h5>Alexanderplatz, Rote Rathaus, Berliner Dom, Ilha dos Museus. </h5>
		</div>
	</div>
	<div class="row ">
		<div class="text-center my-4 col">	
			<p style="text-align: justify;"> Nosso roteiro para o primeiro dia começa indo até a estação <b>Alexanderplatz</b>, zona comercial muito popular com edifícios modernos reconstruída no pós-guerra. Lá encontrarás, entre outros atrativos, a icônica antena de TV Berliner Fernsehturm com mais de 360 metros de altura.<br>
			<br>
			Siga na direção norte e logo encontrarás a <b>Rote Rathaus</b>, edifício imponente em tijolo vermelho e câmara municipal de Berlim. Caminhando ainda à norte, durante cerca de 5 minutos, logo verás a majestosa catedral do século XIX<b> Berliner Dom</b>, que alberga túmulos reais, uma cripta e um órgão com 7000 tubos.<br>
			<br>
			Continue o passeio à norte e verás que a catedral está situada na famosa <b>Ilha dos Museus</b>, no meio do rio Spree, lar de 5 dos museus mais famosos da capital alemã. A ilha é Património Mundial da UNESCO e uma visita imperdível na cidade.  
			Aproveite o tempo que ainda lhe restar do dia para um relaxante passeio pelas margens do rio. Se quiser dar um descanso às pernas pode sempre fechar o dia fazendo um passeio de barco pelo rio Spree, que duram cerca de 3 horas.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<img class="img-fluid" src="images/berlim/Fernsehturm.jpg" alt="" style="border-top-left-radius: 20%;">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/berlim/rathaus.jpg" alt="" style="border-top-right-radius: 20%;">
		</div>
	</div>
	<div class="row mt-4">
		<div class="col posicionar">
			<img class="img-fluid" src="images/berlim/island.jpg" alt="" style="border-bottom-left-radius: 20%; transform: translateY(-95px);">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/berlim/berliner.jpg" alt="" style="border-bottom-right-radius: 20%;">
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
					<b>Evite filas para a Ilha dos Museus</b><br>
					<br><p style="text-align: justify;">Se quiser visitar os 5 museus de Mitte pode comprar com antecedência um passe que dá acesso a todos os museus.<br>
				</div>
				
				<div class="col-5 ml-5 pl-2">
					<b>Compre antes o bilhete para a Berliner Fernsehturm</b><br>
					<br><p style="text-align: justify;">Se desejas visitar a torre de TV e quem sabe até jantar no restaurante que há em seu topo, o ideal é comprar a entrada antes pois na hora as filas são sempre longas.</p> <br>
				</div>	
				<div class="row text-center mt-4">
					<div class="col-5 mr-4 pl-4">
						<a class="button btn-more" onclick="window.location.href='https://www.visitberlin.de/en/museum-island-in-berlin';">Descubra mais</a>
					</div>
					
					<div class="col-5 ml-4 pl-5">
						<a class="button btn-more" onclick="window.location.href='https://tv-turm.de/en/ticket-purchase-on-site/';">Descubra mais</a>
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
				<h5>Gendarmenmarkt, Portão de Brandemburgo, Palácio do Reichstag, Memorial do Holocausto. </h5>
			</div>
		</div>
		<div class="row ">
			<div class="text-center my-4 col">	
				<p style="text-align: justify;"> 
				A sugestão para o segundo dia é começar o tour na <b>Gendarmenmarkt</b>, praça considerada por muitos como a mais bonita da cidade. É composta por três belos e harmoniosos edifícios: a Konzerthaus (Casa de Concertos), a Französischer Dom (Catedral Francesa) e a Deutscher Dom (Catedral Alemã). Se estiver por Berlim na época do natal, não perca o mercado natalício mais bonito da cidade.<br>

				<br>Depois, caminhe até a grande e histórica avenida  Unter den Linden e siga nela em direção ao <b>Portão de Brandemburgo</b>, imagem postal icônica da cidade e símbolo da Alemanha unificada, marco de eventos históricos e sociais que encara a arejada Pariser Platz.<br>

				<br>Siga para a direita em direção ao rio e logo encontrarás o sumptuoso <b>Palácio do Reichstag</b>, edifício parlamentar que destaca-se pela cúpula de vidro, donde se obtém das vistas mais estupendas da capital alemã.<br> 

				<br>Agora retorne novamente em direção ao Portão de Brandemburgo, mas percorra o caminho pelo grande parque Tiergarten. Siga em frente após passar pelo portão, e logo encontrarás o <b>Memorial do Holocausto</b>. Trata-se de um um labirinto de mais de 2000 estelas desiguais, que transmite a sensação intranquila desse período negro da história da Europa.<br>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<img class="img-fluid" src="images/berlim/gendarmenmarkt.jpg" alt="" style="border-top-left-radius: 20%;">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/berlim/brandenburgo.jpg" alt="" style="border-top-right-radius: 20%;">
		</div>
	</div>
	<div class="row mt-4">
		<div class="col posicionar">
			<img class="img-fluid" src="images/berlim/memorial.jpg" alt="" style="border-bottom-left-radius: 20%; transform: translateY(-95px);">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/berlim/reichstag.jpg" alt="" style="border-bottom-right-radius: 20%;">
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
					<b>Visita gratuita mas marcação obrigatória</b><br>
					<br><p style="text-align: justify;">Para visitar o edifício parlamentar e ver toda a cidade de sua cúpula de vidro, é necessário marcar a visita com antecedência (é gratuita!).<br>
				</div>
				
				<div class="col-5 ml-5 pl-2">
					<b>Se quiser caminhar mais</b><br>
					<br><p style="text-align: justify;">Existem diversos <i>free walking tours</i> pela cidade, e são ideais para quem não tem muito tempo mas interessa-se pela sua história. São visitas a pé guiadas por jovens, que não são pagas mas no final cada pessoa dá o que quer para ajudar os guias. </p> <br>
				</div>	
				<div class="row text-center mt-4">
					<div class="col-5 mr-4 pl-4">
						<a class="button btn-more" onclick="window.location.href='https://www.bundestag.de/en/visittheBundestag/dome/registration-245686';">Descubra mais</a>
					</div>
					
					<div class="col-5 ml-4 pl-5">
						<a class="button btn-more" onclick="window.location.href='https://www.neweuropetours.eu/berlin-walking-tours/';">Descubra mais</a>
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
			<h5>Oberbaumbrücke, East Side Gallery, Friedrichshain. </h5>
		</div>
	</div>
	<div class="row ">
		<div class="text-center my-4 col">	
			<p style="text-align: justify;"> Nosso roteiro para o terceiro dia começa indo até a estação Schlesisches Tor, localizada logo no inicío da famosa ponte <b>Oberbaumbrücke</b>, considerada um dos marcos da cidade. Atravesse a pé pela ponte em direção ao outro lado do rio, e repare no caminho olhando para a direita a escultura de metal de 30 metros de altura <i>Molecule Men</i>, outro ponto conhecido da cidade.<br>
			<br>
			Ao ter atravessado a ponte, siga para a esquerda e logo verás o início de um dos pontos históricos mais relevantes da cidade, o pedaço sobrevivente do antigo Muro de Berlim. Lá encontrarás a <b>East Side Galley</b>, um projeto que celebra a queda do muro, onde mais de 100 artistas pintaram toda a extensão do que sobrou dele. Percorra o caminho do muro e descubra diversas <i>street arts</i> que passam mensagens relevantes sobre o passado e os dias de hoje. 
			<br>
			<br>
			A última dica para o dia é seguir até a zona de <b>Friedrichshain</b>, bairro repleto de restaurantes, bares e lojas alternativas, lugar perfeito para caminhar sem rumo e absorver todo o espirito berlinense. Se ainda tiver tempo e se o dia estiver própício, aproveite para conhecer o <i>Volkspark Friedrichshain</i>, o primeiro parque público de Berlim, onde poderás descansar ou fazer um picnic e aproveitar o grande espaço verde da cidade. 
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<img class="img-fluid" src="images/berlim/oberbaum.jpg" alt="" style="border-top-left-radius: 20%;">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/berlim/molecule2.jpg" alt="" style="border-top-right-radius: 20%;">
		</div>
	</div>
	<div class="row mt-4">
		<div class="col posicionar">
			<img class="img-fluid" src="images/berlim/gallery.jpg" alt="" style="border-bottom-left-radius: 20%; transform: translateY(-95px);">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/berlim/fried.jpeg" alt="" style="border-bottom-right-radius: 20%;">
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
                                    <img class="img-fluid" alt="100%x280" src="images/berlim/spati.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">A Cerveja Alemã</h4>
                                        <p class="card-text">A bebida que não podia faltar numa lista de imperdíveis de Berlim. Aproveite a enorme variedade e qualidade a preços atraentes comprando sua <i>Deutsches Bier</i> em uma das diversas <i>Spätis</i>, lojas de conveniencia que ficam abertas até tarde e estão espalhadas pela cidade.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Segundo cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/berlim/currywurst.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">O Currywurst</h4>
                                        <p class="card-text" style="text-align: justify;">A salsicha alemã com molho de caril é uma verdadeira experiência gastronómica típica de Berlim, vendida em diversos lugares por toda a cidade. Mas não fique por ai, sua <i>street food</i> é recheada de outras excelentes comidas que vem de todo o mundo, como os restaurantes turcos, favoritos dos berlinenses.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Terceiro cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/berlim/markthalle.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">O Markthalle Neun</h4>
                                        <p class="card-text" style="text-align: justify;">É um mercado antigo õnde a comida ganhou lugar de referência na capital alemã. Dispõe de bancas de comida cada dia mais variada entre a venda a granel de produtos frescos, vegetais e fruta, carnes e peixes e pão. Barbecue, hamburgarias, sandes e pastas italianas e uma “cantina” com cozinha internacional.</p>
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
                                    <img class="img-fluid" alt="100%x280" src="images/berlim/joelho.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">O Eisbein</h4>
                                        <p class="card-text" style="text-align: justify;">O tradicional prato de joelho de porco é um dos mais famosos da culinária alemã. Se nome e modo de preparo variam de região para região, e a carne é geralmente servida com chucrute e batata. Em Berlim, o clássico vem acompanhado de purê de ervilha. O tamanho do prato impressiona e requer muito apetite.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Segundo cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/berlim/schnitzel.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">O Schnitzel</h4>
                                        <p class="card-text" style="text-align: justify;"> O prato consiste num escalope fino e largo, frito após ser empanado com ovo e migalhas de pão e geralmente servido com uma rodela de limão siciliano. É símbolo da culinária austríaca mas também é extremamente popular na Alemanha – onde costuma ser preparado com carne de porco. </p>
                                    </div>
                                </div>
                            </div>

                            <!--Terceiro cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/berlim/strudel.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">O Apfelstrudel</h4>
                                        <p class="card-text" style="text-align: justify;">O strudel de maçã é uma sobremesa típica feita de massa folhada recheada com maçã, canela, passas e às vezes, migalhas de pão, nozes, amêndoas e rum. É normalmente servido quente, polvilhado com açúcar em pó e acompanhado de calda de baunilha ou sorvete de baunilha e chantilly.</p>
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