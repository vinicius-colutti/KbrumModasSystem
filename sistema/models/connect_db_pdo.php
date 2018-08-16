<?php
define( 'MYSQL_HOST', '127.0.0.1' );
define( 'MYSQL_USER', 'root' );
define( 'MYSQL_PASSWORD', '' );
define( 'MYSQL_DB_NAME', 'db_kbrum_modas' );
$pdo = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD,
array(
             PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
             PDO::ATTR_PERSISTENT => false,
             PDO::ATTR_EMULATE_PREPARES => false,
             PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
         )
 );
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 ?>
