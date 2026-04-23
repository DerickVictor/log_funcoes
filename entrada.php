<?php 

require_once "biblioteca.php";

use function logica\verificaexercito;
use function logica\verificaidade;
use function matematíca\soma;
use function texto\Concatenar;

echo "soma: ", soma (1,1), "\n";
echo "nome completo: ", Concatenar("João"," ", "Silva"), "\n";
echo "você é ", verificaidade(17), "\n";
echo verificaexercito("masculino", 17);

?>