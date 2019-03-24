<?php
require '../App/Autoloader.php';
App\Autoloader::register();

$app=App\App::getInstance();

$post = $app->getTable('Posts');

var_dump($post->all());


/*
if(isset($_GET['p'])){
    $p=$_GET['p'];
}else
{
    $p="home";
}




ob_start();

if($p === "home"){
    require'../Pages/home.php';
}elseif($p === 'article'){
    require '../Pages/single.php';
}elseif($p === 'categorie'){
    require '../Pages/categorie.php';
}elseif($p === '404'){
    require '../Pages/404.php';
}

$content= ob_get_clean();

require '../Pages/Templates/default.php';
*/