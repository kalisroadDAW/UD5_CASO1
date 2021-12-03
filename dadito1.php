<?php

require 'Dado.php'; //Usamos require ya que el código de Dado.php es fundmental

$dado = new Dado(0, 12); //Creamos un objeto de tipo dado.

for ($i = 0; $i<13 ; $i++) { //Cramos el bucle que recorre la función TirarDado.
    echo $dado->tirarDado() . '<br>';
}