    <?php 
        $nadpis = "Formulář POST";
        $Title = "POST";
        $aktualni = "post";
        require_once('head.php'); 
    ?>
    <form action="form.php" method="post">
    <h1><?php echo $SiteName; ?></h1><br>
        <label for="jmeno">Jméno: </label>       
       <input type="text" name="Jmeno" id="jmeno" size="20" maxlength="20" required><br>
       <label for="prijmeni">Příjmení: </label>
       <input type="text" name="Prijmeni" id="prijmeni" size="20" maxlength="20" required><br>
       <label for="datum">Datum narození: </label>       
       <input type="date" name="Datum" id="datum"><br>
       <label for="vyska">Výška[cm]: </label>
       <input type="range" name="Vyska" id="vyska" min="0" max="272"><span id="value"></span><br>
       <label for="barva">Oblíbená barva: </label>
       <input type="color" name="Barva" id="barva"><br>
       <input type="submit" value="Potvrdit">
    </form>

    <script>
        var slider = document.getElementById("vyska");
        var output = document.getElementById("value");
        output.innerHTML = slider.value;

        slider.oninput = function() {
            output.innerHTML = this.value;
        }
    </script>
    <?php require_once('foot.php'); ?>
