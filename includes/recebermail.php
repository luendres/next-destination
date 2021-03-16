<?php 
require '../includes/connection.php';
$mail 		= $_POST['mail'];


$sql = 'INSERT INTO receberemail(mail) VALUES(:mail)';
$sth = $dbh->prepare($sql);

$sth->bindParam(':mail', $mail, PDO::PARAM_STR );

$sth->execute();
if ($sth && $sth->rowCount() == 1) {
    session_start();
    $_SESSION["msg"] = 'O seu e-mail foi registado com sucesso.';
	$_SESSION["show"] = 1;
}
    
header('Location: ' . $_SERVER['HTTP_REFERER']);

 $sth = null;
die();
?>

