<?php 
require '../includes/connection.php';
$id				= $_POST['id'];
$abrev_cont		= $_POST['abrev_cont'];
$continente		= $_POST['continente'];
$pais			=$_POST['pais'];


$sql = 'UPDATE descubra set abrev_cont = :abrev_cont, continente = :continente, pais = :pais WHERE id = :id;';

$sth = $dbh->prepare($sql);
$sth->bindParam(':abrev_cont', $abrev_cont, PDO::PARAM_STR);
$sth->bindParam(':continente',$continente, PDO::PARAM_STR);
$sth->bindParam(':pais',$pais, PDO::PARAM_STR);
$sth->bindParam(':id',$id, PDO::PARAM_INT);
$sth->execute();


header('Location: ' . $_SERVER['HTTP_REFERER']);
 $sth = null;
die();
?>
