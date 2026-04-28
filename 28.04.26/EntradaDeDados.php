<?php

require_once "BibliotecaFuncoes.php";

///conversões 
use function conversoes\DolarParaReal;
use function conversoes\EuroParaReal;
use function conversoes\PesoParaReal;
use function conversoes\LibraParaReal;
use function conversoes\IeneParaReal;

///Cálculo de área
use function areas\areaQuadrado;
use function areas\areaRetangulo;
use function areas\areaTriangulo;
use function areas\areaCirculo;
use function areas\areaTrapezio;

echo "A área do quadrado é de ", areaQuadrado(12), "m²", "\n";
echo "A área do retângulo é de ",areaRetangulo(9,6), "m²", "\n";
echo "A área do triângulo é de ", areaTriangulo(8,7), "m²", "\n";
echo "A área do círculo é de ", areaCirculo(10), "m²", "\n";
echo "A área do trapézio é de ", areaTrapezio(7,5,8), "m²", "\n";
?>