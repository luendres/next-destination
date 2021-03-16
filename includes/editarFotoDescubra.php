<?php 
require '../includes/connection.php';
$id			= $_POST['id'];

$name 	= $_FILES['formFile']['name'];
$tmp 	= $_FILES['formFile']['tmp_name'];
$size 	= $_FILES['formFile']['size'];
$type 	= $_FILES['formFile']['type'];


$fileExt = pathinfo($name, PATHINFO_EXTENSION);
$image = getimagesize($tmp);
if($type == 'image/png' || $type == 'image/jpeg'){
    $target = '../images/index/';				
    $newName = $id.'.'.$fileExt;
    //checking if file exsists
    if(file_exists($target.$newName)) unlink($target.$newName);

    if(move_uploaded_file($tmp, $target.$newName)){
        $sql = 'UPDATE descubra SET foto_index = :foto_index WHERE id = :id';
        $sth = $dbh->prepare($sql);
        $sth->bindParam(':id', $id, PDO::PARAM_INT);
        $sth->bindParam(':foto_index', $newName, PDO::PARAM_STR);
        $sth->execute();
    }
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
 $sth = null;
die();
?>