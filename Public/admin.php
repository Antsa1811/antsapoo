<?php
use Core\Auth\DbAuth;

define('ROOT',dirname(__DIR__));

require ROOT .'/App/App.php';

App::load();

if(isset($_GET['p'])){
    $p=$_GET['p'];
}else
{
    $p="home";
}

//Authentification



ob_start();

if($p === "home"){
    require ROOT . '/Pages/Admin/Posts/index.php';
    require ROOT . '/Pages/Admin/Categories/index.php';
}

//URL POUR LES POSTS
elseif($p === 'article'){
    require ROOT . '/Pages/Admin/Posts/show.php';
}
elseif($p === 'posts.show'){
    require ROOT .'/Pages/Admin/Posts/show.php';
}elseif($p === 'posts.edit'){
    require ROOT .'/Pages/Admin/Posts/edit.php';
}elseif($p === 'posts.add'){
    require ROOT .'/Pages/Admin/Posts/add.php';
}
elseif($p === 'posts.delete'){
    require ROOT .'/Pages/Admin/Posts/delete.php';
}
elseif($p === 'posts.delete'){
    require ROOT .'/Pages/Admin/Posts/delete.php';
}

//URL POUR LES CATEGORIES
elseif($p === 'categories.edit'){
    require ROOT .'/Pages/Admin/Categories/edit.php';
}
elseif($p === 'categories.add'){
    require ROOT .'/Pages/Admin/Categories/add.php';
}
elseif($p === 'categories.delete'){
    require ROOT .'/Pages/Admin/Categories/delete.php';
}


elseif($p === '404'){
    require ROOT .'/Pages/Posts/404.php';
}

$content= ob_get_clean();

require ROOT .'/Pages/Templates/default.php';
