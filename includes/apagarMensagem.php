<?php 
require '../includes/connection.php';
$id			= $_POST['id'];

$sql = 'UPDATE mensagens SET estado = 2 WHERE id = :id';
$sth = $dbh->prepare($sql);
$sth->bindParam(':id', $id, PDO::PARAM_INT);
$sth->execute();
    
header('Location: ' . $_SERVER['HTTP_REFERER']);
 $sth = null;
die();
?>
