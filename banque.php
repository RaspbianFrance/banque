<?php 
echo 'Hello World !';
exit();

session_start();

// Determiner le nom et la couleur de la banque à partir du nom de la machine.
$nomBanque='HAL';
require_once 'couleur.php';
$couleurBanque=colorfct_css_from_rand_string($nomBanque);

// L'utilisateur connecté est dans la variable de session.
if(!isset($_SESSION['utilisateur'])){$_SESSION['utilisateur']=false;}
$utilisateur=$_SESSION['utilisateur'];

////////////////////////////////////////////
//BEFORE USE SITE RUN banque.sql
////////////////////////////////////////////
$database_host = 'wargame_db';
$database_port = '3306';
$database_dbname = 'd610685533';
$database_user = 'd610685533';
$database_password = '9ee993bcb0';
$database_charset = 'UTF8';
$database_options = [ 
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
];

$pdo = new PDO(
    'mysql:host=' . $database_host . 
    ';port=' . $database_port . 
    ';dbname=' . $database_dbname . 
    ';charset=' . $database_charset, 
    $database_user,
    $database_password,
    $database_options
);

?>
