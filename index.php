<?php
  include "./lib/pokemon.php";
  include "./lib/pokemon2.php";
  include "./lib/pokemon3.php";
  include "./lib/pokemon4.php";

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>POKEMON</title>
  </head>
  <body>
    <?php
      $pokemon= new Pokemon(0,0,0);
      $pokemon->setNombre("JuanitoCiruelo");
      $devolverNombre=$pokemon->getNombre();
      $pokemon->setTipo("Hoja");
      $devolverTipo=$pokemon->getTipo();
      $devolverPoder=$pokemon->getPoder();
      $poder=$pokemon->calcularPoder();


      echo "<b>PRIMER POKEMON</b>";
      echo "<br>";
      echo "<br>";
      echo "Su nombre es: <b>".$devolverNombre."</b>";
      echo "<br>";
      echo "Tu pokemon es de tipo:<b> ".$devolverTipo."</b>";
      echo "<br>";
      echo "Tu pokemon tiene:<b> ".$poder."</b> de poder.";
      echo "<br>";
      $legendario=$pokemon->legendario();

      $pokemon2= new Pokemon2 ("Andreu",0,0,0);
      $pokemon2->setNombre("Andreu");
      $devolverNombre=$pokemon2->getNombre();
      $pokemon2->setTipo("Humo");
      $devolverTipo=$pokemon2->getTipo();
      $devolverPoder=$pokemon2->getPoder();
      $poder=$pokemon2->calcularPoder();
      $nivel=$pokemon2->calcularNivel();

      echo "<br><br>";
      echo "<b>SEGUNDO POKEMON</b>";
      echo "<br>";
      echo "<br>";
      echo "Su nombre es: <b>".$devolverNombre."</b>";
      echo "<br>";
      echo "Tu pokemon es de tipo:<b> ".$devolverTipo."</b>";
      echo "<br>";
      echo "Tu pokemon tiene:<b> ".$poder."</b> de poder.";
      echo "<br>";
      echo "Nivel: <b>".$nivel."</b>";

      $pokemon3= new Pokemon3 (0,0,0,0,0);
      $pokemon3->setNombre("Alexander");
      $devolverNombre=$pokemon3->getNombre();
      $pokemon3->setTipo("Dragon");
      $devolverTipo=$pokemon3->getTipo();
      $devolverPoder=$pokemon3->getPoder();
      $vida=$pokemon3->calcularVida();
      $poder=$pokemon3->calcularPoder();

      echo "<br><br>";
      echo "<b>TERCER POKEMON</b>";
      echo "<br>";
      echo "<br>";
      echo "Su nombre es: <b>".$devolverNombre."</b>";
      echo "<br>";
      echo "Tu pokemon es de tipo:<b> ".$devolverTipo."</b>";
      echo "<br>";
      echo "Tu pokemon tiene:<b> ".$poder."</b> de poder.";
      echo "<br>";
      echo "Vida: <b>".$vida."</b>";


      $pokemon4= new Pokemon4 (0,0,0,0,0,0);
      $pokemon4->setNombre("Francis");
      $devolverNombre=$pokemon4->getNombre();
      $pokemon4->setTipo("Lucha");
      $devolverTipo=$pokemon4->getTipo();
      $devolverPoder=$pokemon4->getPoder();
      $poder=$pokemon4->calcularPoder();
      $rareza=$pokemon4->calcularRareza();

      echo "<br><br>";
      echo "<b>CUARTO POKEMON</b>";
      echo "<br>";
      echo "<br>";
      echo "Su nombre es: <b>".$devolverNombre."</b>";
      echo "<br>";
      echo "Tu pokemon es de tipo:<b> ".$devolverTipo."</b>";
      echo "<br>";
      echo "Tu pokemon tiene:<b> ".$poder."</b> de poder.";
      echo "<br>";
      echo "Rareza: <b>".$rareza."</b> ".$pokemon4->devolverRarezaTexto();
      echo "<br>";
    ?>
  </body>
</html>
