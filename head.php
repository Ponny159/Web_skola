<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $Title ?></title>
    <link href='img/favicon.png' rel='shortcut icon' type='image/png'>
    <link rel="stylesheet" href="styles.css?<?php echo time(); ?>">    
</head>
<body>
<header>
        <nav>        
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <div class="icon"><a href="index.php"><img src="./img/logo.png" alt=""></a></div>  
            <h1><?php echo $nadpis ?></h1>          
            <div class="nav-links">
                <?php
                   $menu['index'] = "Domů";
                   $menu['druha'] = "Top hry";
                   $menu['treti'] = "Seznamy";
                   $menu['js'] = "Javascript";
                   $menu['get'] = "GET";
                   $menu['post'] = "POST";
                   $menu['postget'] = "POSTGET";
                   foreach($menu as $key => $value){
                       if($aktualni == $key)
                            echo "<a href=\"" . $key . ".php\" id=\"active\">" . $value . "</a>";
                        else
                            echo "<a href=\"" . $key . ".php\">" . $value . "</a>";                           
                   }
                ?>
                
            </div>        
        </nav>
        <script src="anim.js"></script>
    </header>
