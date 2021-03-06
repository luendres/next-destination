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

<!--Descri????o tour-->
<div class="container mt-5 pt-5">
	<div class="text-center row mt-4">
		<b><h1>Roteiro dos lugares essenciais de Berlim </h1></b>
		<br>
		<h5> Dura????o recomendada: 3 dias </h5>
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
			<p style="text-align: justify;"> Nosso roteiro para o primeiro dia come??a indo at?? a esta????o <b>Alexanderplatz</b>, zona comercial muito popular com edif??cios modernos reconstru??da no p??s-guerra. L?? encontrar??s, entre outros atrativos, a ic??nica antena de TV Berliner Fernsehturm com mais de 360 metros de altura.<br>
			<br>
			Siga na dire????o norte e logo encontrar??s a <b>Rote Rathaus</b>, edif??cio imponente em tijolo vermelho e c??mara municipal de Berlim. Caminhando ainda ?? norte, durante cerca de 5 minutos, logo ver??s a majestosa catedral do s??culo XIX<b> Berliner Dom</b>, que alberga t??mulos reais, uma cripta e um ??rg??o com 7000 tubos.<br>
			<br>
			Continue o passeio ?? norte e ver??s que a catedral est?? situada na famosa <b>Ilha dos Museus</b>, no meio do rio Spree, lar de 5 dos museus mais famosos da capital alem??. A ilha ?? Patrim??nio Mundial da UNESCO e uma visita imperd??vel na cidade.  
			Aproveite o tempo que ainda lhe restar do dia para um relaxante passeio pelas margens do rio. Se quiser dar um descanso ??s pernas pode sempre fechar o dia fazendo um passeio de barco pelo rio Spree, que duram cerca de 3 horas.
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
					<br><p style="text-align: justify;">Se quiser visitar os 5 museus de Mitte pode comprar com anteced??ncia um passe que d?? acesso a todos os museus.<br>
				</div>
				
				<div class="col-5 ml-5 pl-2">
					<b>Compre antes o bilhete para a Berliner Fernsehturm</b><br>
					<br><p style="text-align: justify;">Se desejas visitar a torre de TV e quem sabe at?? jantar no restaurante que h?? em seu topo, o ideal ?? comprar a entrada antes pois na hora as filas s??o sempre longas.</p> <br>
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
				<h5>Gendarmenmarkt, Port??o de Brandemburgo, Pal??cio do Reichstag, Memorial do Holocausto. </h5>
			</div>
		</div>
		<div class="row ">
			<div class="text-center my-4 col">	
				<p style="text-align: justify;"> 
				A sugest??o para o segundo dia ?? come??ar o tour na <b>Gendarmenmarkt</b>, pra??a considerada por muitos como a mais bonita da cidade. ?? composta por tr??s belos e harmoniosos edif??cios: a Konzerthaus (Casa de Concertos), a Franz??sischer Dom (Catedral Francesa) e a Deutscher Dom (Catedral Alem??). Se estiver por Berlim na ??poca do natal, n??o perca o mercado natal??cio mais bonito da cidade.<br>

				<br>Depois, caminhe at?? a grande e hist??rica avenida  Unter den Linden e siga nela em dire????o ao <b>Port??o de Brandemburgo</b>, imagem postal ic??nica da cidade e s??mbolo da Alemanha unificada, marco de eventos hist??ricos e sociais que encara a arejada Pariser Platz.<br>

				<br>Siga para a direita em dire????o ao rio e logo encontrar??s o sumptuoso <b>Pal??cio do Reichstag</b>, edif??cio parlamentar que destaca-se pela c??pula de vidro, donde se obt??m das vistas mais estupendas da capital alem??.<br> 

				<br>Agora retorne novamente em dire????o ao Port??o de Brandemburgo, mas percorra o caminho pelo grande parque Tiergarten. Siga em frente ap??s passar pelo port??o, e logo encontrar??s o <b>Memorial do Holocausto</b>. Trata-se de um um labirinto de mais de 2000 estelas desiguais, que transmite a sensa????o intranquila desse per??odo negro da hist??ria da Europa.<br>
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
					<b>Visita gratuita mas marca????o obrigat??ria</b><br>
					<br><p style="text-align: justify;">Para visitar o edif??cio parlamentar e ver toda a cidade de sua c??pula de vidro, ?? necess??rio marcar a visita com anteced??ncia (?? gratuita!).<br>
				</div>
				
				<div class="col-5 ml-5 pl-2">
					<b>Se quiser caminhar mais</b><br>
					<br><p style="text-align: justify;">Existem diversos <i>free walking tours</i> pela cidade, e s??o ideais para quem n??o tem muito tempo mas interessa-se pela sua hist??ria. S??o visitas a p?? guiadas por jovens, que n??o s??o pagas mas no final cada pessoa d?? o que quer para ajudar os guias. </p> <br>
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
			<h5>Oberbaumbr??cke, East Side Gallery, Friedrichshain. </h5>
		</div>
	</div>
	<div class="row ">
		<div class="text-center my-4 col">	
			<p style="text-align: justify;"> Nosso roteiro para o terceiro dia come??a indo at?? a esta????o Schlesisches Tor, localizada logo no inic??o da famosa ponte <b>Oberbaumbr??cke</b>, considerada um dos marcos da cidade. Atravesse a p?? pela ponte em dire????o ao outro lado do rio, e repare no caminho olhando para a direita a escultura de metal de 30 metros de altura <i>Molecule Men</i>, outro ponto conhecido da cidade.<br>
			<br>
			Ao ter atravessado a ponte, siga para a esquerda e logo ver??s o in??cio de um dos pontos hist??ricos mais relevantes da cidade, o peda??o sobrevivente do antigo Muro de Berlim. L?? encontrar??s a <b>East Side Galley</b>, um projeto que celebra a queda do muro, onde mais de 100 artistas pintaram toda a extens??o do que sobrou dele. Percorra o caminho do muro e descubra diversas <i>street arts</i> que passam mensagens relevantes sobre o passado e os dias de hoje. 
			<br>
			<br>
			A ??ltima dica para o dia ?? seguir at?? a zona de <b>Friedrichshain</b>, bairro repleto de restaurantes, bares e lojas alternativas, lugar perfeito para caminhar sem rumo e absorver todo o espirito berlinense. Se ainda tiver tempo e se o dia estiver pr??p??cio, aproveite para conhecer o <i>Volkspark Friedrichshain</i>, o primeiro parque p??blico de Berlim, onde poder??s descansar ou fazer um picnic e aproveitar o grande espa??o verde da cidade. 
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
                                    <img class="img-fluid" alt="100%x280" src="images/berlim/spati.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">A Cerveja Alem??</h4>
                                        <p class="card-text">A bebida que n??o podia faltar numa lista de imperd??veis de Berlim. Aproveite a enorme variedade e qualidade a pre??os atraentes comprando sua <i>Deutsches Bier</i> em uma das diversas <i>Sp??tis</i>, lojas de conveniencia que ficam abertas at?? tarde e est??o espalhadas pela cidade.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Segundo cart??o-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/berlim/currywurst.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">O Currywurst</h4>
                                        <p class="card-text" style="text-align: justify;">A salsicha alem?? com molho de caril ?? uma verdadeira experi??ncia gastron??mica t??pica de Berlim, vendida em diversos lugares por toda a cidade. Mas n??o fique por ai, sua <i>street food</i> ?? recheada de outras excelentes comidas que vem de todo o mundo, como os restaurantes turcos, favoritos dos berlinenses.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Terceiro cart??o-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/berlim/markthalle.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">O Markthalle Neun</h4>
                                        <p class="card-text" style="text-align: justify;">?? um mercado antigo ??nde a comida ganhou lugar de refer??ncia na capital alem??. Disp??e de bancas de comida cada dia mais variada entre a venda a granel de produtos frescos, vegetais e fruta, carnes e peixes e p??o. Barbecue, hamburgarias, sandes e pastas italianas e uma ???cantina??? com cozinha internacional.</p>
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
                                    <img class="img-fluid" alt="100%x280" src="images/berlim/joelho.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">O Eisbein</h4>
                                        <p class="card-text" style="text-align: justify;">O tradicional prato de joelho de porco ?? um dos mais famosos da culin??ria alem??. Se nome e modo de preparo variam de regi??o para regi??o, e a carne ?? geralmente servida com chucrute e batata. Em Berlim, o cl??ssico vem acompanhado de pur?? de ervilha. O tamanho do prato impressiona e requer muito apetite.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Segundo cart??o-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/berlim/schnitzel.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">O Schnitzel</h4>
                                        <p class="card-text" style="text-align: justify;"> O prato consiste num escalope fino e largo, frito ap??s ser empanado com ovo e migalhas de p??o e geralmente servido com uma rodela de lim??o siciliano. ?? s??mbolo da culin??ria austr??aca mas tamb??m ?? extremamente popular na Alemanha ??? onde costuma ser preparado com carne de porco. </p>
                                    </div>
                                </div>
                            </div>

                            <!--Terceiro cart??o-->
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="images/berlim/strudel.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">O Apfelstrudel</h4>
                                        <p class="card-text" style="text-align: justify;">O strudel de ma???? ?? uma sobremesa t??pica feita de massa folhada recheada com ma????, canela, passas e ??s vezes, migalhas de p??o, nozes, am??ndoas e rum. ?? normalmente servido quente, polvilhado com a????car em p?? e acompanhado de calda de baunilha ou sorvete de baunilha e chantilly.</p>
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
					<input type="email" id="mail" class="mail" name="mail" required placeholder="Insira o seu e-mail aqui*"><br>
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