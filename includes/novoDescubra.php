<?php 
require '../includes/connection.php';
$abrev_cont		= $_POST['abrev_cont'];
$continente		= $_POST['continente'];
$pais			= $_POST['pais'];


$name 	= $_FILES['formFile']['name'];
$tmp 	= $_FILES['formFile']['tmp_name'];
$size 	= $_FILES['formFile']['size'];
$type 	= $_FILES['formFile']['type'];

$sql = 'INSERT INTO descubra(abrev_cont,continente,pais) VALUES (:abrev_cont, :continente, :pais);';

$sth = $dbh->prepare($sql);
$sth->bindParam(':abrev_cont', $abrev_cont, PDO::PARAM_STR);
$sth->bindParam(':continente',$continente, PDO::PARAM_STR);
$sth->bindParam(':pais',$pais, PDO::PARAM_STR);
$sth->execute();

$id = $dbh->lastInsertId();

if($sth && $sth->rowCount() == 1)
{
	$update = 1;
	$fileExt = pathinfo($name, PATHINFO_EXTENSION);
	$image = getimagesize($tmp);
	if($type == 'image/png' || $type == 'image/jpeg'){
		$target = '../images/index/';				
		$newName =  $id.'.'.$fileExt;
		if(move_uploaded_file($tmp, $target.$newName)){
			$sql = 'UPDATE descubra SET foto_index = :foto_index WHERE id = :id';
			$sth = $dbh->prepare($sql);
			$sth->bindParam(':id', $id, PDO::PARAM_INT);
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
