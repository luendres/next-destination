<?php 
require '../includes/connection.php';
$tour_id			= $_POST['tour_id'];

$sql = 'UPDATE tours SET deletado = 1 WHERE tour_id = :tour_id';
$sth = $dbh->prepare($sql);
$sth->bindParam(':tour_id', $tour_id, PDO::PARAM_INT);
$sth->execute();
    
header('Location: ' . $_SERVER['HTTP_REFERER']);
 $sth = null;
die();
?>
