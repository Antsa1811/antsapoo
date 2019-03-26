<!DOCTYPE html>
<html>
    <head>
        <title><?=App::getInstance()->title ?></title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="../Public/css/bulma.min.css"/>
        <link rel="stylesheet" href="../Public/css/style.css"/>
        <link rel="stylesheet" href="../Public/css/less-compiler/css/styles.css"/>
    </head>
    <body>
        <div class="notification is-primary">
                <div class="logo"><a href="index.php">site de teste POO</a>
                    <div class="lien">
                       <a href="index.php?p=home">Home</a>
                       <a href="index.php?p=single" >Single</a>
                   </div>   
                </div>
           
        
        </div>
        <div class="container">
              <?= $content ; ?>
        </div>
      
    </body>
</html>
