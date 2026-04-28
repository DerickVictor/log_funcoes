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

///Saúde
    use function saude\calcularImc;
    use function saude\avalorIdealAgua;
    use function saude\frequenciaCardiacaMaxima;
    use function saude\converterLibrasParaQuilo;
    use function saude\calcularCaloriasBasais;









echo "calculadora de conversão de moedas para o real :)","\n";
echo "ESCOLHA UMA OPÇÃO DE MOEDA:", "\n";
echo "---------------------------------------------", "\n";
echo "1- Dolár Americano para Real", "\n";
echo "2- Euro para Real", "\n";
echo "3- Peso Argentino para Real", "\n";
echo "4- Libra para Real", "\n";
echo "5- Iene para Real", "\n";
echo "6- Sair", "\n";
echo "---------------------------------------------", "\n";
$op = readline();
switch ($op){
    case 1:
    $valor = readline("digite o seu valor em dólar: ");
    $CotacaoDolar = readline("digite a cotação atual do dólar: ");
        echo "Dolár para real: ", DolarParaReal($valor, $CotacaoDolar),"\n\n";
        break;

    case 2:
    $valor = readline("digite o seu valor em Euro: ");
    $CotacaoEuro = readline("digite a cotação atual do Euro: ");
        echo "Euro para real: ", EuroParaReal($valor, $CotacaoEuro),"\n\n";
        break;

    case 3:
    $valor = readline("digite o seu valor em Peso: ");
    $CotacaoPeso = readline("digite a cotação atual do Peso: ");
        echo "Peso para real: ", PesoParaReal($valor, $CotacaoPeso),"\n\n";
        break;

    case 4:
    $valor = readline("digite o seu valor em Libra: ");
    $CotacaoLibra = readline("digite a cotação atual do Libra: ");
        echo "Libra para real: ", LibraParaReal($valor, $CotacaoLibra),"\n\n";
        break;

    case 5:
    $valor = readline("digite o seu valor em dólar: ");
    $CotacaoIene = readline("digite a cotação atual do Iene: ");
        echo "Irene para real: ", IeneParaReal($valor, $CotacaoIene),"\n\n";
        break; 

    case 6:
        echo "saindo..... obrigado por usar minha calculadora :)";
        break;

    default:
        echo "opção inválida";
        break;
}