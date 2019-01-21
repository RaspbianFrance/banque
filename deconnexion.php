<?php 

require_once 'banque.php'; 
session_destroy();
session_regenerate_id(true);
$_SESSION['utilisateur']=false;
header('Location: index.php');

?>
