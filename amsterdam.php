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

<!-- Amsterdam Tour -->
<div class="container-fluid p-0">
	<div id="triangle">
		<div class="segmentTriangle">
			<div class="row text-center pt-5 mb-4 container-fluid" style="color: white;">
				<h1><b>Amsterdam tour</h1></b>
				<p><i>Uma das cidades mais emblemáticas da Europa</i></p>
			</div>

<!--Imagens tour-->
			<div class="container">
				<div class="row">
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/amsterdam/1.jpg" alt="">
						</div>
					</div>
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/amsterdam/2.jpg" alt="">
						</div>
					</div>
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/amsterdam/3.jpg" alt="">
						</div>
					</div>
					<div class="col-6 col-md-3 col-sm-5">
						<div class="position-relative">
							<img class="img-fluid" src="images/amsterdam/4.jpg" alt="">
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
		<b><h1>Roteiro dos lugares essenciais de Amsterdam </h1></b><br>
		<h5> Duração recomendada: 3 dias </h5>
	</div>

	<!--PRIMEIRO DIA-->
	<div class="row mt-5">
		<div class="text-center col-5">	
			<h3>PRIMEIRO DIA:</h3>
		</div>
		<div class="text-left col-6">
			<h5>Andar pela cidade, Passeio pelos canais, Heineken Tour. </h5>
		</div>
	</div>
	<div class="row ">
		<div class="text-center my-4 col">	
			<p style="text-align: justify;"> Não existe melhor maneira de conhecer uma cidade do que andando por ela, então nosso roteiro para o primeiro dia começa exatamente assim. Como Amsterdam é uma cidade plana, <b>caminhar por suas ruas e ruelas</b> é muito confortável. Observe com as casas e sobrados germinados são peculiares, desalinhados, inclinados. A razão disso, é que Amsterdam foi construída em uma área abaixo do nível do mar. Como a cidade surgiu em uma área arenosa e alagada, as ruas e casas foram construídas em cima de estacas de madeira. E com o passar dos séculos, essas estacas foram se deteriorando e as casas entortando ou afundando.<br>
			<br>
			Seguimos nosso roteiro com um tradicional <b>passeio de barco</b> pelos canais, que dá uma volta pelos principais pontos da cidade. Uma boa opção é escolher o modo <i>hop on/hop off</i>, em que você pode embarcar e desembarcar várias vezes durante 24 horas. O passeio noturno de barco tem um charme especial, quando a cidade fica iluminada com pequenas luzes, quase uma penumbra. Alguns barcos oferecem jantar e degustação de vinhos. Se preferir a experiência noturna, sugerimos fazer o tour da Heineken antes e acabar o dia com o passeio de barco. <br>
			<br>
			Nossa última sugestão para o dia é a <b>Heineken Experience</b>, tour guiado pela história da cervejaria e atração muito popular em Amsterdam. Durante o tour, com explicações em inglês de guias em alguns pontos, é contada a história da marca, além de ser explicado tudo sobre a produção. Também durante o percurso, você pode simular alguns passos da produção, como o engarrafamento da cerveja. A visita é interativa, bem animada e eles ainda preparam vários cenários para você tirar as suas fotos.
			</p>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<img class="img-fluid" src="images/amsterdam/amspredios.jpg" alt="" style="border-top-left-radius: 20%;">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/amsterdam/boats.jpg" alt="" style="border-top-right-radius: 20%;">
		</div>
	</div>
	<div class="row mt-4">
		<div class="col posicionar">
			<img class="img-fluid" src="images/amsterdam/heineken.jpg" alt="" style="border-bottom-left-radius: 20%; transform: translateY(-95px);">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/amsterdam/night.jpg" alt="" style="border-bottom-right-radius: 20%;">
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
					<b>Compre o bilhete para o passeio de barco antes</b><br>
					<br><p style="text-align: justify;">Se quiser visitar a cidade com o tour de barcos, pode comprar o bilhete na hora em diversos pontos pela cidade, mas recomendamos comprar online antes para não haver surpresas e garantir o melhor preço.</p><br>
				</div>
				
				<div class="col-5 ml-5 pl-2">
					<b>Reserve antecipadamente o tour pela Heineken</b><br>
					<br><p style="text-align: justify;">Se desejas visitar a cervejaria da Heineken, deve reservar o tour antecipadamente pelo site deles. Tem duranção de 1h30 e no final tens direito a duas cervejas por pessoa.</p><br>
				</div>	
				<div class="row text-center mt-4">
					<div class="col-5 mr-4 pl-4">
						<a class="button btn-more" onclick="window.location.href='https://www.stromma.com/en-nl/amsterdam/';">Descubra mais</a>
					</div>
					
					<div class="col-5 ml-4 pl-5">
						<a class="button btn-more" onclick="window.location.href='https://www.heineken.com/pt/pt/agegateway?returnurl=%2f404.html';">Descubra mais</a>
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
			<h5>Casa de Anne Frank,  Jordaan, DAM Square, Red Light District. </h5>
		</div>
	</div>
		<div class="row ">
			<div class="text-center my-4 col">	
				<p style="text-align: justify;"> 
				A sugestão para o segundo dia é começar o tour visitando o famoso <b>Museu Anne Frank</b>, que funciona no prédio onde a Família Frank e outras pessoas se esconderam por mais de 2 anos da caçada dos nazistas pelos judeus durante a Segunda Guerra Mundial.  Durante a visita, não é permitido filmar nem fotografar. No percurso, você passa pelos cômodos da casa e do anexo onde Anne e sua família ficaram escondidas e percorre vários trechos do diário escrito por ela.<br>

				<br>A casa de Anne Frank fica localizada numa das áreas mais charmosos de Amsterdam, o bairro <b>Jordaan</b>. Dedique um tempo para caminhar e descobrir a zona. Nela você vai encontrar feirantes e barraquinhas de orgânicos nas ruas, mercados de pulgas vendendo óculos vintage e discos raros. Não deixe de entrar nos pequenos mercadinhos, brechós e restaurantes charmosos. Em cada esquina, um canal mais bonito que o outro e a diversos prédios tortinhos com suas janelas amplas e telhado triangular. A cara de Amsterdam!<br>

				<br>Depois de explorar um pouco mais os bairros da cidade, siga para a <b>DAM Square</b>, praça central de Amsterdam que já foi palco de muitos momentos importantes na história da cidade. Nela podemos encontrar, além de diversos cafés, lojas, restaurantes e artistas de rua, um monumento que homenageia as vítimas da Segunda Guerra Mundial e o famoso museu de cera Madame Tussauds.<br> 

				<br>Para terminar o dia, nossa sugestão é seguir para o famoso <b>Red Light District</b>, bairro que ficou famoso pelas cabines em que profissionais do sexo ficam expostas e trabalham de forma regulamentada pelo governo. O nome do beco em que as cabines ficam se chama Trompettersteeg e é proibido fotografar ou filmar as mulheres. Em cima das cabines, luzes vermelhas são colocadas, daí o de distrito da luz vermelha. Explore os arredores e descubra também os diversos coffee shops espalhados pela cidade, lojas muito populares em que há o livre consumo de drogas leves. <br>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<img class="img-fluid" src="images/amsterdam/anne.jpg" alt="" style="border-top-left-radius: 20%;">
			</div>
			<div class="col pl-2">
				<img class="img-fluid" src="images/amsterdam/jd.jpg" alt="" style="border-top-right-radius: 20%;">
			</div>
		</div>
		<div class="row mt-4">
			<div class="col posicionar">
				<img class="img-fluid" src="images/amsterdam/dam.jpg" alt="" style="border-bottom-left-radius: 20%; transform: translateY(-95px);">
			</div>
			<div class="col pl-2">
			<img class="img-fluid" src="images/amsterdam/red.jpg" alt="" style="border-bottom-right-radius: 20%;">
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
					<b>Visitando a casa de Anne Frank</b><br>
					<br><p style="text-align: justify;">Para visitar o museu, deverá comprar o bilhete com o máximo de antecedência possível, pois eles esgotam logo e estão disponíveis apenas online. <br>
				</div>
				
				<div class="col-5 ml-5 pl-2">
					<b>Se quiser visitar o museu de cera</b><br>
					<br><p style="text-align: justify;">Amsterdã é uma das 20 cidades em todo mundo que possuem filiais do famoso museu Madame Tussauds, e o holandês fica bem na DAM Square. O lugar exibe em seu acervo figuras de cera de celebridades, atletas, políticos e personalidades recriadas de forma impecável.</p> <br>
				</div>	
				<div class="row text-center mt-4">
					<div class="col-5 mr-4 pl-4">
						<a class="button btn-more" onclick="window.location.href='https://www.annefrank.org/en/';">Descubra mais</a>
					</div>
					
					<div class="col-5 ml-4 pl-5">
						<a class="button btn-more" onclick="window.location.href='https://www.madametussauds.com/amsterdam/en/';">Descubra mais</a>
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
			<h5>Albert Cuyp Market, Vondelpark, Museumplein, Museu Van Gogh. </h5>
		</div>
	</div>
	<div class="row ">
		<div class="text-center my-4 col">	
			<p style="text-align: justify;"> Nosso roteiro para o terceiro dia começa indo até o <b>Albert Cuyp Market</b>, a maior e mais tradicional feira a céu aberto de Amsterdam, que é também uma movimentada área de lazer. No local são vendidos não somente legumes e frutas frescos, frutos do mar, mas também os mais diversos tipos de objetos, como roupas, calçados, cosméticos, artefatos para bicicletas e souvenirs, todos a preços bem interessantes. Como toda boa feira, a Albert Cuyp também tem uma seção de comidas prontas e petiscos tradicionais.<br>
			<br>
			Após passear pelo mercado, seguimos para o <b>Vondelpark</b>, maior e mais famoso parque público de Amsterdam inaugurado ao público em 1865 e que, desde então, é supermovimentado e utilizado por toda a população. Nele existem centenas de espécies vegetais diferentes e pequenos animais capazes de entreter e alegrar os visitantes. O parque é declarado como um “Monumento Nacional”, fato indicativo do grande valor cultural e histórico que esse espaço representa.<br>
			<br>
			Depois de caminhar e conhecer um pouco mais do parque, siga para a <b>Museumplein</b> ou Praça dos Museus, onde ficam o Rijksmuseum, o Museu Van Gogh e perto também fica o Stedelijk e a Concertgebouw, uma casa de espetáculos. É lá que ficava o famoso letreiro “I amsterdam”, que agora é itinerante, sendo exposto em diferentes partes da cidade.<br>
			<br>
			Nossa última parada do dia é no <b>Museu Van Gogh</b>, visita indispensável para quem vai à Amsterdam. O museu mais visitado da Holanda possui 3 andares e homenageia o holandês Van Gogh, dispondo de mais de 200 telas do artista, além de obras de pintores contemporâneos que se inspiraram nele. Durante a visita não é permitido tirar fotos ou filmar as obras.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<img class="img-fluid" src="images/amsterdam/albert.jpg" alt="" style="border-top-left-radius: 20%;">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/amsterdam/vondelpark.jpg" alt="" style="border-top-right-radius: 20%;">
		</div>
	</div>
	<div class="row mt-4">
		<div class="col posicionar">
			<img class="img-fluid" src="images/amsterdam/museumplein.jpg" alt="" style="border-bottom-left-radius: 20%; transform: translateY(-95px);">
		</div>
		<div class="col pl-2">
			<img class="img-fluid" src="images/amsterdam/vangogh.jpg" alt="" style="border-bottom-right-radius: 20%;">
		</div>
	</div>
</div>	


<!--Experiências-->

<div class="container-fluid py-5" style="background-color: black;" >
<section class="pt-3 pb-3">
  <div class="container">
    <div class="row">
        <div class="col-8">
            <h4 class="mb-3" style="color: white;">Algumas experiências gastronômicas imperdíveis na cidade </h4>
        </div>

        <!--Botões esquerda/direita-->
        <div class="col-4 text-right">
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
                                    <img class="img-fluid" alt="100%x280" src="images/amsterdam/batata.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Patat Frites</h4>
                                        <p class="card-text" style="text-align: justify;">Um alimento muito comum nas barracas de rua de Amsterdam são as batatas fritas, também chamadas de <i>vlaamse frites</i>, que costumam ser servidas em um cone de papel acompanhadas de muita maionese ou outros molhos, alguns lugares têm mais de 20 opções para escolher!.</p>

                                    </div>
                                </div>
                            </div>

                            <!--Segundo cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/amsterdam/arenq.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Maatjes haring</h4>
                                        <p class="card-text" style="text-align: justify;">Os arenques crus são vendidos como tira-gosto nas barracas de rua, e costumam ser acompanhados de cebola ou picles. Devem ser comidos inteiros, segurando sempre pelo rabo. Você vai encontrar em diversos lugares, desde barracas de rua a supermercados. </p>
                                    </div>
                                </div>
                            </div>

                            <!--Terceiro cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/amsterdam/frito.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Bitterballen</h4>
                                        <p class="card-text" style="text-align: justify;">São almôndegas fritas crocantes por fora com um recheio cremoso, acompanhadas de mostarda. Costumam ser servidas como petiscos nos bares. O de carne de vaca é o mais comum, mas também se encontra opções com carne de porco, frango, e até trufas negras.</p>
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
                                    <img class="img-fluid" alt="100%x280" src="images/amsterdam/stroop.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Stroopwafel</h4>
                                        <p class="card-text" style="text-align: justify;">É um "sanduíche de waffle", dois waffles bem fininhos em formato de discos, unidos por uma calda de caramelo. Pode ser encontrado facilmente em barraquinhas de rua, estabelecimentos especializados apenas no stroopwafel, e também em supermercados.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Segundo cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/amsterdam/panq.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Poffertjes</h4>
                                        <p class="card-text" style="text-align: justify;"> São mini panquecas servidas em restaurantes e também em barraquinhas de rua. Geralmente são cobertas com açúcar em pó e manteiga, mas podem ser incrementadas com outros ingredientes de escolha, além de também possuir sua versão salgada.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Terceiro cartão-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/amsterdam/cok.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Cookie Van Stapele</h4>
                                        <p class="card-text" style="text-align: justify;">A Van Stapele Koekmakerij é uma loja que só produz apenas um tipo de biscoito: um cookie de chocolate amargo Valrhona (chocolate francês de altíssima qualidade, considerado um dos melhores do mundo), recheado com chocolate branco e chips de chocolate. </p>
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

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/nextdestination.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
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