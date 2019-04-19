<?php

      $jsonData=file_get_contents("data-1.json");
      $json=json_decode($jsonData,true);

      for($i=0; $i<100; $i++){

      	  print "<div class='inmueble'>
                      <img class='inmueble-imagen' src='img/home.jpg' height='210px'/>
                      <div class='inmueble-datos'>
                           <p class='inmueble-item'>Direccion : ".$json[$i]["Direccion"]."</p>
                           <p class='inmueble-item'>Ciudad : ".$json[$i]["Ciudad"]."</p>
                           <p class='inmueble-item'>Telefono : ".$json[$i]["Telefono"]."</p>
                           <p class='inmueble-item'>Codigo Postal : ".$json[$i]["Codigo_Postal"]."</p>
                           <p class='inmueble-item'>Tipo : ".$json[$i]["Tipo"]."</p>
                           <p class='inmueble-item'>Precio : ".$json[$i]["Precio"]."</p>
                           <div class='inmueble-divicion'></div>
                           <p class='inmuble-vermas'>VER MAS</p>
                       </div>
                 </div>";
       }

?>