<?php 
require '../includes/connection.php';
$nome		= $_POST['nome'];
$email		= $_POST['email'];
$cidade		= $_POST['cidade'];
$pais		= $_POST['pais'];


$name 	= $_FILES['formFile']['name'];
$tmp 	= $_FILES['formFile']['tmp_name'];
$size 	= $_FILES['formFile']['size'];
$type 	= $_FILES['formFile']['type'];

$sql = 'INSERT INTO equipe(nome,email,cidade,pais) VALUES (:nome, :email, :cidade, :pais);';

$sth = $dbh->prepare($sql);
$sth->bindParam(':nome', $nome, PDO::PARAM_STR);
$sth->bindParam(':email',$email, PDO::PARAM_STR);
$sth->bindParam(':cidade',$cidade, PDO::PARAM_STR);
$sth->bindParam(':pais',$pais, PDO::PARAM_STR);
$sth->execute();
$id = $dbh->lastInsertId();

if($sth && $sth->rowCount() == 1)
{
	$update = 1;
	$fileExt = pathinfo($name, PATHINFO_EXTENSION);
	$image = getimagesize($tmp);
	if($type == 'image/png' || $type == 'image/jpeg'){
		$target = '../images/avatares/';				
		$newName =  $id.'.'.$fileExt;
		if(move_uploaded_file($tmp, $target.$newName)){
			$sql = 'UPDATE equipe SET avatar = :avatar WHERE id = :id';
			$sth = $dbh->prepare($sql);
			$sth->bindParam(':id', $id, PDO::PARAM_INT);
			$sth->bindParam(':avatar', $newName, PDO::PARAM_STR);
			$sth->execute();
		}
	}
}else
    $update = 0;

header('Location: ' . $_SERVER['HTTP_REFERER']);
 $sth = null;
die();
?>
