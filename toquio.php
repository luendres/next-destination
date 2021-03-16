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
	

<!-- Toquio Tour -->
<div class="container-fluid p-0">
	<div id="triangle">
		<div class="segmentTriangle">
			<div class="row text-center pt-5 mb-4 container-fluid" style="color: white;">
				<h1><b>Tóquio tour</h1></b>
				<p><i>A terra do sol nascente vive em constante renovação</i></p>
			</div>

<!--Imagens tour-->
			<div class="container">
				<div class="row">
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/toquio/1.jpg" alt="">
						</div>
					</div>
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/toquio/2.jpg" alt="">
						</div>
					</div>
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/toquio/3.jpg" alt="">
						</div>
					</div>
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/toquio/4.jpg" alt="">
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
			<b><h1>Roteiro dos lugares essenciais de Tóquio </h1></b>
			<br>
			<h5> Duração recomendada: 3 dias </h5>
	</div>

<!--PRIMEIRO DIA-->
	<div class="row mt-5">
		<div class="text-center col-5">	
			<h3>PRIMEIRO DIA:</h3>
		</div>
		<div class="text-left col-6">
			<h5>Shibuya, Harajuku, Santuário Meiji  </h5>
		</div>
	</div>
	<div class="row ">
		<div class="text-center my-4 col">	
			<p style="text-align: justify;"> Comece o tour por Tóquio conhecendo um dos seus bairros mais movimentados, o <b>Shibuya</b>, onde fica um dos cruzamentos mais famosos do mundo. Quando 8 semáforos se fecham ao mesmo tempo e o caos organizado se instaura, as 5 faixas de pedestres viram uma passarela. O <i>Shibuya Crossing</i>, como é chamado, acaba sendo uma verdadeira experiência multicultural, onde se ouvem sotaques e idiomas de todos os cantos do mundo em pequenos metros quadrados. Shibuya é um bairro enorme e cheio de coisas interessantes para fazer, percorra suas pequenas ruas no entorno do famoso cruzamento.<br>
			<br>

			Depois, siga para o grande reduto da cultura pop japonesa em Tóquio, em <b>Harajuku</b>. É lá que você vai encontrar pessoas fazendo os melhores cosplays do mundo de um lado e as ultra fashionistas do outro. E no meio disso um mundo de animes, músicas, cores, luzes pulsantes e comidas pensadas meticulosamente para ficarem bonitas em fotos. Harajuku é a disneylândia da cultura pop japonesa, onde os mais antenados vão para serem vistos e onde o estranho e o bizarro caminham lado a lado em <i>Takeshita</i>, uma das ruas que ligam a <i>Meiji-Dori</i> à estação Harajuku.<br>
			<br>

			Pra fechar o roteiro do dia, a sugestão é ir até o <b>Santuário Meiji</b>, templo xintoísta que fica em Harajuku e é dedicado ao Imperador Meiji e sua esposa, a imperatriz Shoken. O imperador é conhecido por ter quebrado o isolamento do Japão com o mundo no século 19 e dado os primeiros passos no desenvolvimento do país. O templo foi fundado em 1920, entretanto foi completamente destruído pelos bombardeios durante a Segunda Guerra Mundial. Felizmente foi reconstruído em 1958 com a ajuda de doações que vieram de diversos cantos do mundo. O templo é um oásis de paz no meio da loucura de Tóquio.
			</p>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<img class="img-fluid" src="images/toquio/shibuya.jpg" alt="" style="border-top-left-radius: 20%;">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/toquio/Harajuku.jpg" alt="" style="border-top-right-radius: 20%;">
		</div>
	</div>
	<div class="row mt-4">
		<div class="col posicionar">
			<img class="img-fluid" src="images/toquio/meiji.jpg" alt="" style="border-bottom-left-radius: 20%; transform: translateY(-95px);">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/toquio/meiji1.jpg" alt="" style="border-bottom-right-radius: 20%;">
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
					<b>Se deseja descansar durante a visita a Harajuku</b><br>
					<br><p style="text-align: justify;">Cansou de tanta loucura? Vale passar no <i>Tokyu Plaza</i>, um shopping que fica em frente a estação de metrô com uma das entradas mais lindas (e loucas) que você vai ver no seu primeiro dia em Tóquio. Aproveite e vá ao terraço, onde poderá descansar numa praça cheia de lugares para sentar, com muitas árvores e plantas.<br>
				</div>
				
				<div class="col-5 ml-5 pl-2">
					<b>Descubra mais sobre o Santuário Meiji</b><br>
					<br><p style="text-align: justify;">No site do santuário poderá encontrar mais informações sobre a história do lugar, além de mapas e caminhos para descobrir o santuário da melhor maneira possível.</p><br>
				</div>	
				<div class="row text-center mt-4">
					<div class="col-5 mr-4 pl-4">
						<a class="button btn-more" onclick="window.location.href='https://omohara.tokyu-plaza.com/en/';">Descubra mais</a>
					</div>
					
					<div class="col-5 ml-4 pl-5">
						<a class="button btn-more" onclick="window.location.href='https://www.japan.travel/pt/spot/1666/';">Descubra mais</a>
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
			<h5> Templo Asakusa, Tokyo Skytree, Museu Nacional de Tóquio</h5>
		</div>
	</div>
	<div class="row ">
		<div class="text-center my-4 col">	
			<p style="text-align: justify;"> 
			Nosso roteiro para o segundo dia começa conhecendo o <b>Templo Asakusa</b>, o principal de Tóquio, onde acontecem as grandes celebrações religiosas da cidade e onde uma centena de japoneses vão todos os dias. Some a isso mais uma multidão de turistas e assim temos um dos lugares mais cheios de Tóquio em datas especiais.<br>
			<br>

			Após a visita ao templo, regressando para a estação de metro, é possivel avistar do outro lado do rio <i>Sumida</i> dois marcos da arquitetura moderna de Tóquio: O edifício <i>Asahi</i>, que ostenta um dos simbolos mais reconhecíveis da cidade, a chama de Asahi, uma estrutura dourada que representa um pingo de espuma. E como pano de fundo, ergue-se a <b>Tokyo Sky Tree</b>, a mais alta torre de telecomunicações do mundo com 634 metros de altura.<br>
			<br>

			Para completar o roteiro do dia, siga até o <b>Museu Nacional de Tóquio</b>, para conhecer seu extenso e rico acervo da cultura milenar japonesa. O museu é o maior e mais antigo de todo Japão. Visitá-lo é uma boa forma de se familiarizar com a cultura e a história do país.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<img class="img-fluid" src="images/toquio/asakusa.jpg" alt="" style="border-top-left-radius: 20%;">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/toquio/asakusa1.jpg" alt="" style="border-top-right-radius: 20%;">
		</div>
	</div>
	<div class="row mt-4">
		<div class="col posicionar">
			<img class="img-fluid" src="images/toquio/skytree.jpg" alt="" style="border-bottom-left-radius: 20%; transform: translateY(-95px);">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/toquio/museu.jpg" alt="" style="border-bottom-right-radius: 20%;">
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
					<b>Subir na Tokyo Sky Tree</b><br>
					<br><p style="text-align: justify;">A torre tem dois mirantes, o Tembo Deck que fica a 350 metros de altura e o Tembo Galleria, que está a 450 metros de altura. Se deseja subir na torre, é bom verificar os preços dos bilhetes online antes, já que estes variam muito, além de existirem diferentes combos.<br>
				</div>
				
				<div class="col-5 ml-5 pl-2">
					<b>Visitar o Museu Nacional</b><br>
					<br><p style="text-align: justify;">Se deseja visitar o museu, entre no site oficial e descubra mais sobre os horários e dias de funcionamento, além dos preços dos bilhetes de admissão. </p> <br>
				</div>	
				<div class="row text-center mt-4">
					<div class="col-5 mr-4 pl-4">
						<a class="button btn-more" onclick="window.location.href='http://www.tokyo-skytree.jp/en/';">Descubra mais</a>
					</div>
					
					<div class="col-5 ml-4 pl-5">
						<a class="button btn-more" onclick="window.location.href='https://www.tnm.jp/?lang=en';">Descubra mais</a>
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
			<h5>Akihabara, Santuário Nezu, Hamarikyu Gardens.</h5>
		</div>
	</div>
	<div class="row ">
		<div class="text-center my-4 col">	
			<p style="text-align: justify;">A sugestão para o terceiro e último dia é começar o tour conhecendo o distrito de <b>Akiharaba</b>, pertencente ao imenso bairro de <i>Chiyoda</i>. Entretanto, o bairro é famoso em todo o mundo por ser a meca dos produtos eletrônicos e novidades tecnológicas em Tóquio. Akiharaba começou a se desenvolver como polo de eletrônicos nos anos 60 e 70, e hoje o bairro é conhecido como <i>Eletric Town (Akihabara Denki Gai)</i>.<br>
			<br>

			Após conhecer o distrito eletrônico, vamos para outro santuário muito importante do Japão, o <b>Santuário Nezu</b>. Ele foi construído em 1707 com arquitetura típica <i>Ishinoma-zukuri</i>, e quem caminha em torno dos seus pavilhões não imagina que este é considerado uma das jóias do Japão. Além de ser lá que acontece o Festival das Azaléias na primavera (entre abril e maio).<br>
			<br>
				
			Para o último passeio do dia, visitaremos um autêntico jardim japonês, passeio imperdível para quem está em Tóquio. O <b>Hamarikyu Gardens</b> fica dentro da cidade, não distante da <i>Tokyo Station</i>. O jardim fica na margem da Baía de Tóquio e tem lagos de água salgada, que mudam de nível com o vai e vem das marés, além de uma tradicional casa de chás em uma das ilhas. O jardim é imenso, cheio de caminhos e lugares para descansar e apreciar o contraste do tradicional jardim japonês com os modernos prédios de Tóquio ao redor.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<img class="img-fluid" src="images/toquio/akihabara.jpg" alt="" style="border-top-left-radius: 20%;">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/toquio/nezu.jpg" alt="" style="border-top-right-radius: 20%;">
		</div>
	</div>
	<div class="row mt-4">
		<div class="col posicionar">
			<img class="img-fluid" src="images/toquio/hamarikyu.jpg" alt="" style="border-bottom-left-radius: 20%; transform: translateY(-95px);">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/toquio/hamarikyu1.jpg" alt="" style="border-bottom-right-radius: 20%;">
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
                                    <img class="img-fluid" alt="100%x280" src="images/toquio/gyoza.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Gyoza</h4>
                                        <p class="card-text" style="text-align: justify;">É um bolinho feito com uma massa fina de trigo recheada com carnes, principalmente carne de porco acompanhada de vegetais, gengibre, molho de soja e óleo de gergelim. </p>
                                    </div>
                                </div>
                            </div>

                            <!--Segundo cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/toquio/karaage.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Karaage</h4>
                                        <p class="card-text" style="text-align: justify;">O prato consiste numa marinada de frango com shoyu, saquê e gengibre ralado, que depois é frito em pedaços, ficando muito crocante. Se encontra em vários restaurantes.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Terceiro cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/toquio/ramen.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Ramen</h4>
                                        <p class="card-text" style="text-align: justify;"> O ramen é uma massa fina, geralmente preparada com ovo cozido, carne de porco e moyashi, com um caldo que pode ser feito por dias.</p>
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
                                    <img class="img-fluid" alt="100%x280" src="images/toquio/okonomiyaki.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Okonomiyaki</h4>
                                        <p class="card-text" style="text-align: justify;">Prato muito popular no Japão por sua facilidade de fazer, semelhante a uma panqueca japonesa, onde são acrescentados diversos ingredientes como vegetais e carnes.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Segundo cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/toquio/shabu.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Shabu Shabu</h4>
                                        <p class="card-text" style="text-align: justify;">É uma carne fatiada bem fina, que é colocada com o hashi numa panela com água fervente junto com legumes e outras especiarias, e depois retirada de volta para comer. </p>
                                    </div>
                                </div>
                            </div>

                            <!--Terceiro cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/toquio/miso.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Sopa Miso</h4>
                                        <p class="card-text" style="text-align: justify;">O prato é feito a partir do caldo de peixe e de pasta de miso (soja fermentada), e é muito comum vir com cebolinho, algas e tofu. É uma sopa simples, leve e aconchegante.</p>
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