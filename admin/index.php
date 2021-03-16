<?php 
require '../includes/connection.php';

$sql = 'SELECT id,nome,email,mensagem,estado FROM mensagens WHERE estado < 2';
$result = $dbh->prepare($sql);
$result->execute();
$mensagens = $result->fetchAll();

$sql = 'SELECT id,mail,estado FROM receberemail WHERE estado < 2';
$result = $dbh->prepare($sql);
$result->execute();
$receberemail = $result->fetchAll();

$sql = 'SELECT id,abrev_cont,continente,pais, foto_index,deletado FROM descubra WHERE deletado = 0';
$result = $dbh->prepare($sql);
$result->execute();
$descubra = $result->fetchAll();

$sql = 'SELECT tour_id,id_continente,cidade,fotos,roteiro,descricao,deletado FROM tours WHERE deletado = 0';
$result = $dbh->prepare($sql);
$result->execute();
$tours = $result->fetchAll();

$sql = 'SELECT id,foto_arte,lugar,estado FROM streetarts WHERE estado < 2';
$result = $dbh->prepare($sql);
$result->execute();
$streetarts = $result->fetchAll();

$sql = 'SELECT id,nome,email,cidade,pais,avatar,estado FROM equipe WHERE estado < 2';
$result = $dbh->prepare($sql);
$result->execute();
$equipe = $result->fetchAll();

$sql = 'SELECT id,relato,autor,pais_origem,estado FROM relatos WHERE estado < 2';
$result = $dbh->prepare($sql);
$result->execute();
$relatos = $result->fetchAll();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Next Destination</title>
	<link rel="icon" type="image/x-icon" href="../images/globe.ico">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/fontawesome.min.css">
	<link rel="stylesheet" href="../css/nd.css">


</head>
<style>

body {

	overflow-x: hidden;
}



</style>


<!-- MENU PRINCIPAL -->
<nav class="navbar navbar-expand-md navbar-light bg-white static-top m-4">
	<div class="container-fluid">
		<div class="two-thirds column alpha">
			<a class="navbar-brand" href="index.php">
				<img class="img-fluid" src="../images/logond2.png" style="width:15rem;height:5rem;" alt="">
			</a>
		</div>
		<div class="one-third column omega">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

		<div class="collapse navbar-collapse" id="menu">
			<ul class="navbar-nav row ml-3 pl-4" style="width: 550px" >
			  <li class="nav-item col-6 ml-3 pl-4">
				<a class="nav-link text-center" aria-current="page" href="" style="background-color: black; color: white; cursor: default;">MODO DE ADMINISTRAÇÃO</a>
			  </li>
			  <li class="nav-item col-4 ml-5" style="cursor: pointer;">
				<a class="nav-link active" aria-current="page" onclick="location.href='../index.php'">Terminar Sessão</a>
			  </li>
			</ul>
		</div>
	</div>
</nav>

<nav class="navbar navbar-expand-lg py-3" id="nav-style">
    <div class="container">
      	<div class="collapse navbar-collapse justify-content-center">
           <div class="navbar-nav">
    		    <div class="mx-lg-3" ><a class="nav-link text-light" href="#pagina-inicial">Página Inicial</a></div>
                <div class="mx-lg-3"><a class="nav-link text-light" href="#tours">Tours</a></div>
                <div class="mx-lg-3"><a class="nav-link text-light" href="#street-arts">Street Arts</a></div>
                <div class="mx-lg-3"><a class="nav-link text-light" href="#relatos">Relatos</a></div>
                <div class="mx-lg-3"><a class="nav-link text-light" href="#equipe">Equipe</a></div>
                <div class="mx-lg-3"><a class="nav-link text-light" href="#mensagens">Mensagens</a></div>
                <div class="mx-lg-3"><a class="nav-link text-light" href="#emails">E-mails</a></div>
            </div>
        </div>
    </div>
</nav>



<div class="container-fluid">
	<div class="row py-3">
        	<div class="col-12 py-3" id="pagina-inicial">
            	<h4><i class="fas fa-home "></i> Página Inicial</h4>

                <div class="card-body p-0 bg-light">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <?php foreach ($descubra as $key => $roteiro) { ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header border-bottom border-dark" id="flush-heading<?php echo $key + 1; ?>"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $key + 1; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $key + 1; ?>"><?php echo $key + 1 . ' - ' . $roteiro['continente']?></button></h2>
                            <div id="flush-collapse<?php echo $key + 1; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $key + 1; ?>" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img class="img-fluid" src="../images/index/<?php echo $roteiro['foto_index'] ?> " alt="1" id="Img<?php echo $foto_index['id'] ?>">
                                            <button id="btn foto_<?php echo $roteiro['id'] ?>" onclick="createModal('<?php echo $roteiro['id'] ?>','../includes/editarFotoDescubra.php')" class="btn btn-secondary text-center w-100 rounded-0" aria-hidden="true"> Alterar foto </button>                               
                                        </div>
                                        <div class="col-md-8">
                                            <form action="../includes/editarDescubra.php" method="post">
                                            <input type="hidden" name="id" value="<?php echo  $roteiro['id']; ?>">
                                                <div class="row">
                                                    <div class="col-2 my-2">
                                                        <div class="input-data">
                                                            <label>Id:</label>
                                                            <input type="text" disabled class="form-control form-control-sm border border-dark" required name="id" placeholder="id" value="<?php echo $roteiro['id']; ?>" class="text-left">
                                                        </div>
                                                    </div>
                                               
                                                    <div class="col-10 my-2">
                                                        <div class="input-data">
                                                            <label>Abreviação do continente: </label>
                                                            <input type="text" class="form-control form-control-sm border border-dark" required name="abrev_cont" value="<?php echo $roteiro['abrev_cont']; ?>" class="text-left">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col my-2 ">
                                                        <div class="input-data">
                                                            <label>Continente: </label>
                                                            <input type="text" class="form-control form-control-sm border border-dark" required name="continente" value="<?php echo $roteiro['continente']; ?>" class="text-left">
                                                        </div>                     
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 my-2">
                                                        <div class="input-data">
                                                            <label>País: </label>
                                                            <input type="text" class="form-control form-control-sm border border-dark" required name="pais" value="<?php echo $roteiro['pais']; ?>" class="text-left">
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 my-2 text-center">
                                                        <div class="input-form">
                                                            <button type='submit' class="btn btn-sm btn-outline-success w-100 align-bottom">Guardar Alterações</button>
                                                        </div>
                                                    </div>
                                                </form>

                                                <div class="col-md-6 my-2 text-center">
                                                    <form action="../includes/apagarDescubra.php" method="post">
                                                    <input type="hidden" name="id" value="<?php echo  $roteiro['id']; ?>">
                                                        <button type='submit' class="btn btn-sm btn-outline-danger w-100"> Apagar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="card-footer bg-dark text-center">
                    <a data-bs-toggle="modal" data-bs-target="#novoDescubra" class="btn  btn-outline-light">Adicionar novo</a>
                </div>
	  		</div>
	  		
	  		<div class="col-12 py-3" id="tours">
            	<h4><i class="fas fa-suitcase "></i> Tours</h4>
	  		    <div class="card-body p-0">
                    <div class="accordion accordion-flush" id="accordionFlushExample2">
                        <?php foreach ($tours as $key => $tour) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header border-bottom border-dark" id="flush2-heading<?php echo $key + 1; ?>"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush2-collapse<?php echo $key + 1; ?>" aria-expanded="false" aria-controls="flush2-collapse<?php echo $key + 1; ?>"><?php echo $key + 1 . ' - ' . $tour['cidade']?></button></h2>
                                <div id="flush2-collapse<?php echo $key + 1; ?>" class="accordion-collapse collapse" aria-labelledby="flush2-heading<?php echo $key + 1; ?>" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                    <img class="img-fluid" src="../images/tours/<?php echo $tour['fotos'] ?> " alt="1" id="Img<?php echo $fotos['tour_id'] ?>">
                                                    <button id="btn<?php echo $tour['tour_id'] ?>" onclick="createModal('<?php echo $tour['tour_id'] ?>','../includes/editarFotoTour.php')" class="btn btn-dark text-center w-100 rounded-0"> Alterar foto </button>
                                            </div>
                                            <div class="col-md-8">
                                                <form action="../includes/editarTour.php" method="post">
                                                    <input type="hidden" name="tour_id" value="<?php echo  $tour['tour_id']; ?>">
                                                    <div class="row">
                                                    	<div class="col-2 my-2">
                                                            <div class="input-data">
                                                            	<label>Id: </label>
                                                                <input type="text" disabled required class="form-control form-control-sm border border-dark" name="tour_id" value="<?php echo $tour['tour_id']; ?>" class="text-left">
                                                            </div>
                                                        </div>
                                                        <div class="col-10 my-2">
                                                            <div class="input-data">
                                                            	<label>Cidade: </label>
                                                                <input type="text" required class="form-control form-control-sm border border-dark" name="cidade" value="<?php echo $tour['cidade']; ?>" class="text-left">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col my-2 ">
                                                            <div class="input-data">
                                                            	<label>Roteiro: </label>
                                                                <input type="text" required class="form-control form-control-sm border border-dark" name="roteiro" value="<?php echo $tour['roteiro']; ?>" class="text-left">                       
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="row">
                                                        <div class="col my-2">
                                                            <div class="input-data">
                                                            	<label>Descrição: </label>
                                                                <input type="text" required class="form-control form-control-sm border border-dark" name="descricao" value="<?php echo $tour['descricao']; ?>" class="text-left">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 my-2 text-center">
                                                            <div class="input-form">
                                                                <button type='submit' class="btn btn-sm btn-outline-success w-100 align-bottom"><i class="fas fa-save"></i> Guardar Alterações</button>
                                                            </div>
                                                        </div>
                                            </form>
                                                        <div class="col-6 my-2 text-center">
                                                        <form action="../includes/apagarTour.php" method="post">
                                                            <input type="hidden" name="tour_id" value="<?php echo  $tour['tour_id']; ?>">
                                                            <button type='submit' class="btn btn-sm btn-outline-danger w-100"><i class="fas fa-trash-alt"></i> Apagar</button>
                                                        </form>
                                                        </div>
                                                    </div>
                                            </div>
                                              
	  									</div>
	  								</div>
	  							</div>
	  						</div>
	  					<?php } ?>
	  					<div class="card-footer bg-dark text-center">
                    		<a data-bs-toggle="modal" data-bs-target="#novoTour" class="btn  btn-outline-light">Adicionar novo</a>
                		</div>
	  				</div>
	  			</div>
	  		</div>

	  		<div class="row">
	  			<div class="col-12 py-3" id="street-arts">
                	<h4><i class="fas fa-palette "></i> Street Arts</h4>
                	<div class="card-body pt-0 mt-0">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Lugar</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($streetarts as $key => $arte) { ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $arte['foto_arte']; ?></td>
                                    <td><?php echo $arte['lugar']; ?></td>
                                    <td align="right">
                                        <button type="submit" class="btn btn-dark" data-toggle="modal" data-target="#delArte<?php echo $arte['id'] ?>">Apagar</button>

                                            <!-- Modal -->
                                        <div class="modal fade" id="delArte<?php echo $arte['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="example">Apagar Street Art - Identificação nº <?php echo $key + 1; ?></h5>
                                                    </div>
                                                    <div class="modal-body">
                                                    Tem certeza que deseja eliminar esta street art?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="../includes/apagarStreetart.php" method="post">
                                                        <input type="hidden" name="id" value="<?php echo  $arte['id']; ?>">
                                                        <button type="submit" class="btn btn-success">Sim</button>
                                                        </form>

                                                        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
                                                    </div>
                                               </div>
                                            </div>
                                        </div>
                                   </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer bg-dark text-center">
                    <a data-bs-toggle="modal" data-bs-target="#novoStreetart" class="btn  btn-outline-light">Adicionar novo</a>
                </div>
	  		</div>

	  		<div class="col-12 py-3" id="equipe">
                	<h4><i class="fas fa-users "></i> Equipe</h4>
                	<div class="card-body pt-0 mt-0">
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Cidade</th>
                                <th>País</th>
                                <th>Avatar</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($equipe as $key => $pessoa) { ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $pessoa['nome']; ?></td>
                                    <td><?php echo $pessoa['email']; ?></td>
                                    <td><?php echo $pessoa['cidade']; ?></td>
                                    <td><?php echo $pessoa['pais']; ?></td>
                                    <td><?php echo $pessoa['avatar']; ?></td>
                                    <td align="right">
                                        <button type="submit" class="btn btn-dark" data-toggle="modal" data-target="#delEquipe<?php echo $pessoa['id'] ?>">Apagar</button>
                                            <!-- Modal -->
                                        <div class="modal fade" id="delEquipe<?php echo $pessoa['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="example3Title" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="example3">Apagar membro da equipe cadastrado - Identificação nº <?php echo $key + 1; ?></h5>
                                                    </div>
                                                    <div class="modal-body">
                                                    Tem certeza que deseja eliminar este membro da equipe?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="../includes/apagarEquipe.php" method="post">
                                                        <input type="hidden" name="id" value="<?php echo  $pessoa['id']; ?>">
                                                        <button type="submit" class="btn btn-success">Sim</button>
                                                        </form>

                                                        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
                                                    </div>
                                               </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer bg-dark text-center">
                    <a data-bs-toggle="modal" data-bs-target="#novoEquipe" class="btn  btn-outline-light">Adicionar novo</a>
                </div>
	  		</div>

	  	<div class="row py-3">
        	<div class="col-12 py-3" id="relatos">
            	<h4><i class="fas fa-envelope-open-text "></i> Relatos de Utilizadores</h4>
            	<table class="table table-hover">
    				<thead>
	      				<tr>
	      					<th>Id</th>
		        			<th>Autor</th>
		        			<th>País de Origem</th>
		        			<th></th>
	      				</tr>
    				</thead>
    				<tbody>
    					<?php foreach ($relatos as $key => $relato) { ?>
				    	<tr>
				    		<td><?php echo $key + 1; ?></td>
					        <td><?php echo $relato['autor'] ?></td>
					        <td><?php echo $relato['pais_origem'] ?></td>
					        <td align="right">
					        	
					                <button type="submit" class="btn btn-dark" data-toggle="modal" data-target="#verRel<?php echo $relato['id'] ?>">Ler relato</button>

					        				<!-- Modal -->
											<div class="modal fade" id="verRel<?php echo $relato['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="example4Title" aria-hidden="true">
											  <div class="modal-dialog modal-dialog-centered" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h5 class="modal-title" id="example4Title">Relato - Identificação nº <?php echo $key + 1; ?></h5>
									              </div>
											      <div class="modal-body text-justify">
											        <?php echo $relato['relato'] ?>
											      </div>
											      <div class="modal-footer">
											        <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
											       </div>
											   </div>
											</div>
										</div>

										<button type="submit" class="btn btn-dark" data-toggle="modal" data-target="#delRel<?php echo $relato['id'] ?>">Apagar</button>
					        				<!-- Modal -->
											<div class="modal fade" id="delRel<?php echo $relato['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="example4Title" aria-hidden="true">
											  <div class="modal-dialog modal-dialog-centered" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h5 class="modal-title" id="example4">Apagar relato - Identificação nº <?php echo $key + 1; ?></h5>
									              </div>
											      <div class="modal-body">
											        Tem certeza que deseja apagar este relato?
											      </div>
											      <div class="modal-footer">
											      	<form action="../includes/apagarRelato.php" method="post">
                                                	<input type="hidden" name="id" value="<?php echo  $relato['id']; ?>">
                                                	<button type="submit" class="btn btn-success">Sim</button>
                                            		</form>

											        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
											       </div>
											   </div>
											</div>
										</div>                                          
					        		</td>
				      			</tr>
				      		<?php } ?>
				    	</tbody>
  					</table>
	  			</div>
                <div class="card-footer bg-dark text-center">
                    <a data-bs-toggle="modal" data-bs-target="#novoRelato" class="btn  btn-outline-light">Adicionar novo</a>
                </div>
	  		</div>
	 

        <div class="row py-3">
        	<div class="col-12 py-3" id="mensagens">
            	<h4><i class="far fa-comment "></i> Mensagens de sugestões</h4>
            	<table class="table table-hover">
    				<thead>
	      				<tr>
	      					<th>Id</th>
		        			<th>Nome</th>
		        			<th>Email</th>
							<th></th>		        			
	      				</tr>
    				</thead>
    				<tbody>
    					<?php foreach ($mensagens as $key => $mensagem) { ?>
				    	<tr>
				    		<td><?php echo $key + 1; ?></td>
					        <td><?php echo $mensagem['nome'] ?></td>
					        <td><?php echo $mensagem['email'] ?></td>
					        <td align="right">
					        	
					                <button type="submit" class="btn btn-dark" data-toggle="modal" data-target="#lerMSG<?php echo $mensagem['id'] ?>">Ler mensagem</button>

					        				<!-- Modal -->
											<div class="modal fade" id="lerMSG<?php echo $mensagem['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
											  <div class="modal-dialog modal-dialog-centered" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h5 class="modal-title" id="exampleModalLongTitle">Mensagem - Identificação nº <?php echo $key + 1; ?></h5>
									              </div>
											      <div class="modal-body">
											        <?php echo $mensagem['mensagem'] ?>
											      </div>
											      <div class="modal-footer">
											        <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
											       </div>
											   </div>
											</div>
										</div>

										<button type="submit" class="btn btn-dark" data-toggle="modal" data-target="#delMSG<?php echo $mensagem['id'] ?>">Apagar</button>
					        				<!-- Modal -->
											<div class="modal fade" id="delMSG<?php echo $mensagem['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="example2Title" aria-hidden="true">
											  <div class="modal-dialog modal-dialog-centered" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h5 class="modal-title" id="example2">Apagar mensagem - Identificação nº <?php echo $key + 1; ?></h5>
									              </div>
											      <div class="modal-body">
											        Tem certeza que deseja apagar a mensagem?
											      </div>
											      <div class="modal-footer">
											      	<form action="../includes/apagarMensagem.php" method="post">
                                                	<input type="hidden" name="id" value="<?php echo  $mensagem['id']; ?>">
                                                	<button type="submit" class="btn btn-success">Sim</button>
                                            		</form>

											        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
											       </div>
											   </div>
											</div>
										</div>                                          
					        		</td>
				      			</tr>
				      		<?php } ?>
				    	</tbody>
  					</table>
	  			</div>
	  		</div>


        	<div class="col-12 py-3" id="emails">
            	<h4><i class="fas fa-at "></i> E-mails para receber atualizações</h4>
            	<table class="table table-hover">
    				<thead>
	      				<tr>
	      					<th>Id</th>
		        			<th>Email</th>
		        			<th></th>
	      				</tr>
    				</thead>
    				<tbody>
    					<?php foreach ($receberemail as $key => $mail) { ?>
				    	<tr>
				    		<td><?php echo $key + 1; ?></td>
					        <td><?php echo $mail['mail'] ?></td>
					        <td align="right">
					        <button type="submit" class="btn btn-dark" data-toggle="modal" data-target="#delEmail<?php echo $mail['id'] ?>">Apagar</button>
					        				<!-- Modal -->
											<div class="modal fade" id="delEmail<?php echo $mail['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="example5Title" aria-hidden="true">
											  <div class="modal-dialog modal-dialog-centered" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h5 class="modal-title" id="example5">Apagar e-mail - Identificação nº <?php echo $key + 1; ?></h5>
									              </div>
											      <div class="modal-body">
											        Tem certeza que deseja eliminar este e-mail?
											      </div>
											      <div class="modal-footer">
											      	<form action="../includes/apagarMail.php" method="post">
                                                	<input type="hidden" name="id" value="<?php echo  $mail['id']; ?>">
                                                	<button type="submit" class="btn btn-success">Sim</button>
                                            		</form>

											        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
											       </div>
											   </div>
											</div>
										</div>
									</td>

					    </tr>
				      		<?php } ?>
				    </tbody>
  				</table>
	  		</div>
	  	</div>  		
 	</div>	

<!-- Modal Descubra -->
<div class="modal fade " id="novoDescubra" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content mx-auto">
            <form action="../includes/novoDescubra.php" method="post" enctype="multipart/form-data" onsubmit="btnDescubra.disabled = true; return true;">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white" id="staticBackdropLabel">Adicionar novo</h5>
                    <button type="button" class="btn-close  btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="my-3 form-group form-control-sm">
                        <div class="input-data">
                            <input type="text" required name="abrev_cont" id="abrev_cont" class="text-center">
                            <label> Abreviação do continente</label>
                        </div>
                    </div>
                    <div class="my-3 form-group form-control-sm wrapper">
                        <div class="input-data">
                            <input type="text" required name="continente" id="continente"class="text-center">
                            <label> Continente</label>
                        </div>
                    </div>
                    <div class="my-3 form-group form-control-sm wrapper">
                        <div class="input-data">
                            <input type="text" required name="pais" id="pais" class="text-center">
                            <label> País</label>
                        </div>
                    </div>
                    <div class="my-3 form-group form-control-sm">
                        <input required class="form-control form-control-sm" type="file" name="formFile" accept="image/png, image/jpeg">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="btnDescubra">Salvar</button>
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>
                    
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Tour-->
<div class="modal fade " id="novoTour" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content mx-auto">
            <form action="../includes/novoTour.php" method="post" enctype="multipart/form-data" onsubmit="btnTour.disabled = true; return true;">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white" id="staticBackdropLabel">Adicionar novo</h5>
                    <button type="button" class="btn-close  btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="my-3 form-group form-control-sm">
                        <div class="input-data">
                            <input type="text" required name="cidade" id="cidade" class="text-center">
                            <label> Cidade</label>
                        </div>
                    </div>
                    <div class="my-3 form-group form-control-sm wrapper">
                        <div class="input-data">
                            <input type="text" required name="roteiro" id="roteiro" class="text-center">
                            <label> Roteiro</label>
                        </div>
                    </div>
                    <div class="my-3 form-group form-control-sm wrapper">
                        <div class="input-data">
                            <input type="text" required name="descricao" id="descricao" class="text-center">
                            <label> Descrição</label>
                        </div>
                    </div>
                    <div class="my-3 form-group form-control-sm">
                        <input required class="form-control form-control-sm" type="file" name="formFile" accept="image/png, image/jpeg">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="btnTour">Salvar</button>
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>
                    
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Street Art-->
<div class="modal fade " id="novoStreetart" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content mx-auto">
            <form action="../includes/novoStreetart.php" method="post" enctype="multipart/form-data" onsubmit="btnArte.disabled = true; return true;">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white" id="staticBackdropLabel">Adicionar Novo</h5>
                    <button type="button" class="btn-close  btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group form-control-sm wrapper">
                        <div class="input-data">
                            <input type="text" required name="lugar" id="lugar">
                            <label> Lugar</label>
                        </div>
                    </div>
                    <div class="form-group form-control-sm">
                        <input required class="form-control form-control-sm" type="file" name="formFile" id="formFile" accept="image/png, image/jpeg">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="btnArte">Salvar</button>
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>
                    
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Equipe-->
<div class="modal fade " id="novoEquipe" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content mx-auto">
            <form action="../includes/novoEquipe.php" method="post" enctype="multipart/form-data" onsubmit="btnEquipe.disabled = true; return true;">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white" id="staticBackdropLabel">Adicionar Novo</h5>
                    <button type="button" class="btn-close  btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group form-control-sm wrapper">
                        <div class="input-data">
                            <input type="text" required name="nome" id="nome">
                            <label> Nome</label>
                        </div>
                    </div>
                    <div class="form-group form-control-sm wrapper">
                        <div class="input-data">
                            <input type="text" required name="email" id="email" class="text-center">
                            <label> E-mail</label>
                        </div>
                    </div>
                    <div class="form-group form-control-sm wrapper">
                        <div class="input-data">
                            <input type="text" required name="cidade" id= "cidade" class="text-center">
                            <label> Cidade</label>
                        </div>
                    </div>
                    <div class="form-group form-control-sm wrapper">
                        <div class="input-data">
                            <input type="text" required name="pais" id="pais" class="text-center">
                            <label> País</label>
                        </div>
                    </div>
                    <div class="form-group form-control-sm">
                        <input required class="form-control form-control-sm" type="file" name="formFile" id="formFile" accept="image/png, image/jpeg">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="btnEquipe">Salvar</button>
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>
                    
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Relato-->
<div class="modal fade " id="novoRelato" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content mx-auto">
            <form action="../includes/novoRelato.php" method="post" enctype="multipart/form-data" onsubmit="btnRelato.disabled = true; return true;">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white" id="staticBackdropLabel">Adicionar Novo</h5>
                    <button type="button" class="btn-close  btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group form-control-sm wrapper">
                        <div class="input-data">
                            <input type="text" required name="relato" id="relato">
                            <label> Relato</label>
                        </div>
                    </div>
                    <div class="form-group form-control-sm wrapper">
                        <div class="input-data">
                            <input type="text" required name="autor" id="autor" class="text-center">
                            <label> Autor</label>
                        </div>
                    </div>
                    <div class="form-group form-control-sm wrapper">
                        <div class="input-data">
                            <input type="text" required name="pais_origem" id= "pais_origem" class="text-center">
                            <label> País de Origem</label>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="btnRelato">Salvar</button>
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>
                    
                </div>
            </form>
        </div>
    </div>
</div>

<script src="../js/nextdestination.js "></script> 	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js" integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw==" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  

</body>
</html>

