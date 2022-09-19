<?php

// $dbname = "kbrcdatabase";
// $host = "localhost";
// $username = "root";
// $password = "";
// $charset = "utf8mb4";

$dbname = "sql10520776";
$host = "sql10.freemysqlhosting.net";
$username = "sql10520776";
$password = "baBzH1245J";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

try{
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
   throw new PDOException($e->getMessage());
   
}

require_once 'admin.php';
require_once 'newsLetter.php';
require_once 'content.php';

$admin = new admin($pdo);
$newsLetter = new newsLetter($pdo);
$content = new content($pdo);
