<?php 
require '../includes/connection.php';
$relato			= $_POST['relato'];
$autor			= $_POST['autor'];
$pais_origem	= $_POST['pais_origem'];


$sql = 'INSERT INTO relatos(relato,autor,pais_origem) VALUES (:relato, :autor, :pais_origem);';

$sth = $dbh->prepare($sql);
$sth->bindParam(':relato', $relato, PDO::PARAM_STR);
$sth->bindParam(':autor',$autor, PDO::PARAM_STR);
$sth->bindParam(':pais_origem',$pais_origem, PDO::PARAM_STR);
$sth->execute();
$id = $dbh->lastInsertId();


header('Location: ' . $_SERVER['HTTP_REFERER']);
 $sth = null;
die();
?>
