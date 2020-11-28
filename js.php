    <?php 
        $nadpis = "Javascript";
        $Title = "javascript";
        $aktualni = "js";
        require_once('head.php'); 
    ?>
    <main>  
        <div class="image">
            <img src="img/csgo.jpg" onmouseover="this.src='img/cod.jpg'" onmouseout="this.src='img/csgo.jpg'">  
        </div> 
        <div class="vypocet">
            <label>Celková dráha[km]</label>
            <input type="text" id="draha">
            <label>Čas[min]</label>
            <input type="text" id="cas">
            <label>Výsledek[km/h]</label>
            <input type="text" id="vysl" readonly>
            <input type="button" value="Vypočítat" onclick="Vypocet()"> 
            <div class="odkaz">            
                <a href="javascript::void(0)" onclick="this.innerHTML = prompt('enter text')">Změnit text</a>
            </div>
        </div>

        <script type="text/javascript">        
          function Vypocet(){
              var inputDraha = document.getElementById("draha").value;
              var inputCas = document.getElementById("cas").value;
              if(inputCas != "" && inputDraha != ""){
              var x = inputDraha;
              var y = inputCas;
              y /= 60;
              var vysledek = x/y;
              document.getElementById("vysl").value = vysledek;              
            }
            else
                document.getElementById("vysl").value = "Nezadal jste hodnoty!"; 
          }  
        </script>       

    </main>
    
    <?php require_once('foot.php'); ?>
