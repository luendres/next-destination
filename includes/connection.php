<?php
$user = 'root';
$pass = '';
try {
    $dbh = new PDO('mysql:host=localhost;port=3306;dbname=nextdestination;charset=utf8', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
/* site PHP PDO https://www.php.net/manual/en/book.pdo.php */
?>