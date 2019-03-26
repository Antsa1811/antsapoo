<?php
define('ROOT',dirname(__DIR__));

require ROOT .'/App/App.php';

App::load();

$app=App::getInstance();





if(isset($_GET['p'])){
    $p=$_GET['p'];
}else
{
    $p="home";
}




ob_start();

if($p === "home"){
    require ROOT . '/Pages/Posts/home.php';
}elseif($p === 'article'){
    require ROOT . '/Pages/Posts/show.php';
}elseif($p === 'posts.category'){
    require ROOT .'/Pages/Posts/category.php';
}elseif($p === 'posts.show'){
    require ROOT .'/Pages/Posts/show.php';
}
elseif($p === '404'){
    require ROOT .'/Pages/Posts/404.php';
}

$content= ob_get_clean();

require ROOT .'/Pages/Templates/default.php';
