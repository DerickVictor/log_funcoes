<?php

require_once "BibliotecaFuncoes.php";

use function conversoes\DolarParaReal;
use function conversoes\EuroParaReal;
use function conversoes\PesoParaReal;
use function conversoes\LibraParaReal;
use function conversoes\IeneParaReal;

echo "O seu valor do dolár em real é: ", DolarParaReal(1,5), "\n";

echo "O seu valor do euro em real é: ", EuroParaReal(1,5.85), "\n";

echo "O seu valor do peso em real é: ", PesoParaReal(1,0.0035), "\n";

echo "O seu valor da libra em real é: ", LibraParaReal(1,6.74), "\n";

echo "O seu valor do iene em real é: ", IeneParaReal(1,0.031), "\n";

 
?>