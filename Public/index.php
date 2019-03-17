<?php
require '../App/Autoloader.php';
App\Autoloader::register();

if(isset($_GET['p'])){
    $p=$_GET['p'];
}else
{
    $p="home";
}

//Initialisations des databases
$db = new App\Database('poo');

ob_start();

if($p === "home"){
    require'../Pages/home.php';
}elseif($p === 'single'){
    require '../Pages/single.php';
}

$content= ob_get_clean();

require '../Pages/Templates/default.php';