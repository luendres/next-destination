<?php 
require '../includes/connection.php';
$cidade		= $_POST['cidade'];
$roteiro	= $_POST['roteiro'];
$descricao	= $_POST['descricao'];


$name 	= $_FILES['formFile']['name'];
$tmp 	= $_FILES['formFile']['tmp_name'];
$size 	= $_FILES['formFile']['size'];
$type 	= $_FILES['formFile']['type'];

$sql = 'INSERT INTO tours(cidade,roteiro,descricao) VALUES (:cidade, :roteiro, :descricao);';

$sth = $dbh->prepare($sql);
$sth->bindParam(':cidade', $cidade, PDO::PARAM_STR);
$sth->bindParam(':roteiro',$roteiro, PDO::PARAM_STR);
$sth->bindParam(':descricao',$descricao, PDO::PARAM_STR);
$sth->execute();
$tour_id = $dbh->lastInsertId();


if($sth && $sth->rowCount() == 1)
{
	$update = 1;
	$fileExt = pathinfo($name, PATHINFO_EXTENSION);
	$image = getimagesize($tmp);
	if($type == 'image/png' || $type == 'image/jpeg'){
		$target = '../images/tours/';				
		$newName =  $tour_id.'.'.$fileExt;
		if(move_uploaded_file($tmp, $target.$newName)){
			$sql = 'UPDATE tours SET fotos = :fotos WHERE tour_id = :tour_id';
			$sth = $dbh->prepare($sql);
			$sth->bindParam(':tour_id', $tour_id, PDO::PARAM_INT);
			$sth->bindParam(':foto_index', $newName, PDO::PARAM_STR);
			$sth->execute();
		}
	}
}else
    $update = 0;

header('Location: ' . $_SERVER['HTTP_REFERER']);
 $sth = null;
die();
?>
