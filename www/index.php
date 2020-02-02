<?php
echo date( 'Y-m-d- H:i:s' ) . '<br>';
try {
    $dns = 'mysql:dbname=' . getenv('MYSQL_DATABASE') . ';host=mysql;charset=utf8mb4';
    $username = getenv('MYSQL_USER');
    $password = getenv('MYSQL_PASSWORD');
    $pdo = new PDO($dns, $username, $password);
} catch (PDOException $e) {
    echo 'MySQL (PDO) : ' . $e->getMessage();
    exit;
}

?>
