<?php 
require_once 'banque.php'; 
require_once 'debut-page.php'; 

echo '<pre>';
$fichier=$_GET['fichier'];

$allow = array(
    'emploi.txt',
    'metions-legales.txt',
    'mot-gerant.txt',
);

if (!in_array($fichier, $allow))
{
    echo '404';
    exit();
}

require_once $fichier;
echo '</pre>';

require_once 'fin-page.php'; 

?>
