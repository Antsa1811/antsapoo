<?php
define('ROOT',dirname(__DIR__));

require ROOT .'/App/App.php';

App::load();

$app=App::getInstance();





if(isset($_GET['p'])){
    $page=$_GET['p'];
}else
{
    $page="posts.index";
}


$page =explode('.',$page);


if($page[0] == 'admin'){
    $controller =  '\App\Controller\Admin\\' . ucfirst($page[1]). 'Controller';
    $action =$page[2];
}else{
    $controller =  '\App\Controller\\' . ucfirst($page[0]). 'Controller';
    $action=$page[1];
}

 $controller = new $controller();
 $controller->$action();





  
/*

if($p === "home"){
    $controller =new \App\Controller\PostsController();
    $controller->index();

    
}elseif($p === 'article'){
    require ROOT . '/Pages/Posts/show.php';
}elseif($p === 'posts.category'){
    
    $controller =new \App\Controller\PostsController();
    $controller->category();

    
    }elseif($p === 'posts.show'){
    
        $controller =new \App\Controller\PostsController();
        $controller->show();
    
      
}
elseif($p === 'login'){
    $controller =new \App\Controller\UsersController();
    $controller->login();
}
elseif($p === 'admin'){
    require ROOT .'/Pages/Public/admin.php';
}
elseif($p === '404'){
    require ROOT .'/Pages/Posts/404.php';
}
elseif($p === 'admin.posts.index'){
    $controller = new \App\Controller\Admin\PostsController();
    $controller ->index();
}


*/