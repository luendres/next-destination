<?php 
require '../includes/connection.php';
$lugar			= $_POST['lugar'];

$name 	= $_FILES['formFile']['name'];
$tmp 	= $_FILES['formFile']['tmp_name'];
$size 	= $_FILES['formFile']['size'];
$type 	= $_FILES['formFile']['type'];

$sql = 'INSERT INTO streetarts(lugar) VALUES(:lugar);';
$sth = $dbh->prepare($sql);
$sth->bindParam(':lugar', $lugar, PDO::PARAM_STR);
$sth->execute();
$id = $dbh->lastInsertId();

if($sth && $sth->rowCount() == 1)
{
	$update = 1;
	$fileExt = pathinfo($name, PATHINFO_EXTENSION);
	$image = getimagesize($tmp);
	if($type == 'image/png' || $type == 'image/jpeg'){
		$target = '../images/artes/';				
		$newName =  $id.'.'.$fileExt;
		if(move_uploaded_file($tmp, $target.$newName)){
			$sql = 'UPDATE streetarts SET foto_arte = :foto_arte WHERE id = :id';
			$sth = $dbh->prepare($sql);
			$sth->bindParam(':id', $id, PDO::PARAM_INT);
			$sth->bindParam(':foto_arte', $newName, PDO::PARAM_STR);
			$sth->execute();
		}
	}
}else
    $update = 0;

header('Location: ' . $_SERVER['HTTP_REFERER']);
 $sth = null;
die();
?>
