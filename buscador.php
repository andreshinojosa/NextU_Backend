<?php

      $ciudad = $_POST["ciudad"];
      $tipo = $_POST["tipo"];
      $precio = $_POST["precio"];

      $rangoprecio = explode(";",$precio);
      $precioMin = $rangoprecio[0];
      $precioMax = $rangoprecio[1];

      $jsonData=file_get_contents("data-1.json");
      $json=json_decode($jsonData,true);

      for($i=0; $i<100; $i++){

          $j1[$i] = substr($json[$i]["Precio"],1,6);
          $j2[$i] = explode(",",$j1[$i]);
          $jsonPrecio[$i] = $j2[$i][0].$j2[$i][1];

          if($json[$i]["Ciudad"]==$ciudad && $json[$i]["Tipo"]==$tipo && ( $jsonPrecio[$i]>=$precioMin && $jsonPrecio[$i]<=$precioMax )){
             
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
      }
?>