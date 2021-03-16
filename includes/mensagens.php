<?php 
require '../includes/connection.php';
$nome			= $_POST['nome'];
$email 			= $_POST['email'];
$mensagem 		= $_POST['mensagem'];


$sql = 'INSERT INTO mensagens( nome, email, mensagem) VALUES(:nome,:email,:mensagem)';
$sth = $dbh->prepare($sql);
$sth->bindParam(':nome', $nome, PDO::PARAM_STR);
$sth->bindParam(':email', $email, PDO::PARAM_STR );
$sth->bindParam(':mensagem', $mensagem, PDO::PARAM_STR);
$sth->execute();

if ($sth && $sth->rowCount() == 1) {
    session_start();
    $_SESSION["msg"] = 'Mensagem enviada com sucesso';
	$_SESSION["show"] = 1;
}
    
header('Location: ' . $_SERVER['HTTP_REFERER']);
 $sth = null;
die();
?>
