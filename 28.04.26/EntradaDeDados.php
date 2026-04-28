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
use function saude\valorIdealAgua;
use function saude\frequenciaCardiacaMaxima;
use function saude\converterLibrasParaQuilo;
use function saude\calcularCaloriasBasais;

$op = "";
$opcao = "";

while ($opcao !=4 ){
    echo"menu
    Escolha uma das categorias abaixo:
    1- Conversao
    2- Geometria
    3- saude
    4- sair
    \n";
    $opcao = readline (">>> ");
    
    
    switch($opcao){
    case 1:
        while ($op != 6){
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
            $valor = readline("digite o seu valor em Iene: ");
            $CotacaoIene = readline("digite a cotação atual do Iene: ");
            echo "Iene para real: ", IeneParaReal($valor, $CotacaoIene),"\n\n";
            break; 

            case 6:
            echo "saindo..... obrigado por usar minha calculadora :)";
            break;

            default:
            echo "opção inválida";
            break;
            } 
        }
    

    case 2:
        while ($op != 6){
        echo "calculadora de áreas :)","\n";
        echo "ESCOLHA UMA OPÇÃO DE POLÍGONO:", "\n";
        echo "---------------------------------------------", "\n";
        echo "1- Quadrado ", "\n";
        echo "2- Retângulo ", "\n";
        echo "3- Triângulo ", "\n";
        echo "4- Círculo ", "\n";
        echo "5- Trapézio", "\n";
        echo "6- Sair", "\n";
        echo "---------------------------------------------", "\n";

        $op = readline();
        switch ($op){
            case 1:
            $lado = readline("Digite o valor do lado do seu quadrado" );
            echo "A área do seu quadrado é de: ", areaQuadrado($lado),"\n\n";
            break;

            case 2:
            $base = readline("Digite o valor da base do seu retângulo ");
            $altura = readline("Digite o valor da altura do seu retângulo ");
            echo "A área do seu retângulo é de: ", areaRetangulo($altura, $base);
            break;

            case 3:
            $base = readline("Digite o valor da base do seu triângulo ");
            $altura = readline("Digite o valor da altura do seu triângulo ");
            echo "A área do seu triângulo é de: ", areaTriangulo($altura, $base);
            break;

            case 4:
            $raio = readline("Digite o valor do raio do seu círculo" );
            echo "A área do seu círculo é de: ", areaCirculo($raio),"\n\n";
            break;

            case 5: 
            $baseMaior = readline("Digite o valor da base maior do seu trapézio ");
            $altura = readline("Digite o valor da altura do seu trapézio ");
            $baseMenor = readline("Digite o valor da base menor do seu trapézio ");
            echo "A área do seu trapézio é de: ", areaTrapezio($baseMaior, $altura, $baseMenor);
            break;

            case 6:
            echo "saindo..... obrigado por usar minha calculadora :)";
            break;
            }
        }
    case 3:
        while ($op != 6){
        echo "Menu de saúde :)","\n";
        echo "ESCOLHA UMA OPÇÃO:", "\n";
        echo "---------------------------------------------", "\n";
        echo "1- Calcular IMC ", "\n";
        echo "2- Quantidade ideal de água ", "\n";
        echo "3- Máximo de frequencia cardíaca ", "\n";
        echo "4- Calculadora de libras para KG ", "\n";
        echo "5- Calcular Kcals basais ", "\n";
        echo "6- Sair", "\n";
        echo "---------------------------------------------", "\n"; 

        $op = readline();
        switch ($op){
            case 1:
            $peso = readline("Digite o seu peso ");
            $altura = readline("Digite a sua altura ");
            echo "O seu IMC é de: ", calcularImc($peso, $altura);
            break;

            case 2:
            $peso = readline("Digite o seu peso ");
            echo "A quantidade ideal pra você é de: ", valorIdealAgua($peso), "ml";
            break;

            case 3:
            $idade = readline("Digite a sua idade ");   
            echo "A frequência cardiaca máxima pra você é de: ", frequenciaCardiacaMaxima($idade), "ml";

            case 4: 
            $libras = readline("Digite o seu peso em libras");
            echo "O peso em quilogramas é de: ", converterLibrasParaQuilo($libras), "Kg";
            break;

            case 5:
            $sexo = readline("Digite o seu sexo ");
            $peso = readline("Digite o seu peso ");
            $idade = readline("Digite a sua idade ");
            $altura = readline("Digite a sua altura ");
            echo "A suas Kcals basais é de: ", calcularImc($sexo, $peso, $idade, $altura);
            break;

            case 6:
            echo "saindo..... obrigado por usar meu menu :)";
            break;
        }
        
    }
}   
}