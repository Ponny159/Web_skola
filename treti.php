
    <?php 
        $nadpis = "Herní studia";
        $Title = "Seznamy";
        $aktualni = "treti";
        require_once('head.php'); 
    ?>
    <main>
        <div class="seznamy">
          <div class="szn">  
            <h1>Nejúspěšnější herní studia a jejich hry</h1>
            <ol>
                <li>Sony Interactive Entertainment</li>
                <li>Xbox Game Studios</li>
                <li>Nintendo</li>
                <li>Electronic Arts</li>
                <li>Activision Blizzard</li>
            </ol>        
            <ul>
                <li>The Last of Us, Ghost of Tsushima</li>
                <li>Halo infinite, Gears 5</li>
                <li>The Legend of Zelda, Super Smash Bros</li>
                <li>Apex Legends, Fifa</li>
                <li>Call of Duty, Tony Hawk's Pro skater</li>        
            </ul>
          </div>
        </div>
    </main>
    
    <?php require_once('foot.php'); ?>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC hry</title>
    <link href='img/favicon.png' rel='shortcut icon' type='image/png'>
    <link rel="stylesheet" href="styles.css?<?php echo time(); ?>">    
</head>
<body>
    <?php 
        $SiteName = "treti";
        require_once('head.php'); 
    ?>
    <main>
        <div class="seznamy">
          <div class="szn">  
            <h1>Nejúspěšnější herní studia a jejich hry</h1>
            <ol>
                <li>Sony Interactive Entertainment</li>
                <li>Xbox Game Studios</li>
                <li>Nintendo</li>
                <li>Electronic Arts</li>
                <li>Activision Blizzard</li>
            </ol>        
            <ul>
                <li>The Last of Us, Ghost of Tsushima</li>
                <li>Halo infinite, Gears 5</li>
                <li>The Legend of Zelda, Super Smash Bros</li>
                <li>Apex Legends, Fifa</li>
                <li>Call of Duty, Tony Hawk's Pro skater</li>        
            </ul>
          </div>
        </div>
    </main>
    
    <?php require_once('foot.php'); ?>
</body>
</html>
