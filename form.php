    <?php 
        $nadpis = "Formulář";
        $Title = "Form";        
        require_once('head.php'); 
    ?>

    <div id="form">
        <?php 
        if(!empty($_GET)){        
        echo "<h1>GET</h1><br>
        Vaše jméno: ". $_GET['Jmeno'] ."<br>";
        echo "Vaše Příjmení: ". $_GET['Prijmeni'] ."<br>";
        echo "Vaše datum narození: ". $_GET['Datum'] ."<br>";
        echo "Vaše výška: ". $_GET['Vyska'] ."<br>";
        echo "Vaše oblíbená barva: ". $_GET['Barva'] ."<br><br>";      

            foreach($_GET as $key => $value){
                if(!empty($value) || ctype_digit($value))
                echo "GET parametr '$key' má hodnotu '$value'<br>";
            }  
        }
        if(!empty($_POST)){        
            echo "<h1>POST</h1><br>
            Vaše jméno: ". $_POST['Jmeno'] ."<br>";
            echo "Vaše Příjmení: ". $_POST['Prijmeni'] ."<br>";
            echo "Vaše datum narození: ". $_POST['Datum'] ."<br>";
            echo "Vaše výška: ". $_POST['Vyska'] ."<br>";
            echo "Vaše oblíbená barva: ". $_POST['Barva'] ."<br><br>";  
            
            foreach($_POST as $key => $value){
                if(!empty($value) || ctype_digit($value))
                echo "POST parametr '$key' má hodnotu '$value'<br>";
            } 
        }
        echo "<h1>REQUEST</h1><br>
        Vaše jméno: ". $_REQUEST['Jmeno'] ."<br>";
        echo "Vaše Příjmení: ". $_REQUEST['Prijmeni'] ."<br>";
        echo "Vaše datum narození: ". $_REQUEST['Datum'] ."<br>";
        echo "Vaše výška: ". $_REQUEST['Vyska'] ."<br>";
        echo "Vaše oblíbená barva: ". $_REQUEST['Barva'] ."<br><br><br>";

        
        if(isset($_GET['Jmeno'])){
            echo "<a href=\"?Jmeno=1\">Zadat 1 do pole GET</a>";
            $val = intval($_GET['Jmeno']);
            echo "<div class=\"table\">";
            echo "<table>";        
            for($j = 0; $j < 3; $j++){
                echo "<tr>";
                for($k = 0; $k < 5; $k++){
                    if(is_numeric($_GET['Jmeno'])){
                        echo "<td>{$val}</td>";
                        $val++;
                    }
                    else
                        echo "<td>" . $_GET['Jmeno'] . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            echo "</div>";
        }
        ?>        
    </div>
    <?php require_once('foot.php'); ?>