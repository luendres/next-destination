<?php 
require '../includes/connection.php';
$tour_id	= $_POST['tour_id'];
$cidade		= $_POST['cidade'];
$roteiro	=$_POST['roteiro'];
$descricao	=$_POST['descricao'];

$sql = 'UPDATE tours set cidade = :cidade, roteiro = :roteiro, descricao = :descricao WHERE tour_id = :tour_id;';

$sth = $dbh->prepare($sql);
$sth->bindParam(':cidade', $cidade, PDO::PARAM_STR);
$sth->bindParam(':roteiro',$roteiro, PDO::PARAM_STR);
$sth->bindParam(':descricao',$descricao, PDO::PARAM_STR);
$sth->bindParam(':tour_id',$tour_id, PDO::PARAM_INT);
$sth->execute();

header('Location: ' . $_SERVER['HTTP_REFERER']);
 $sth = null;
die();
?>
