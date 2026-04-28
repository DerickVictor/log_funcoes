<?php 

namespace conversoes{

  function DolarParaReal ($valor, $CotacaoDolar){
    return $valor * $CotacaoDolar;
  }

  function EuroParaReal ($valor, $CotacaoEuro){
    return $valor * $CotacaoEuro;
  }

  function PesoParaReal ($valor, $CotacaoPeso){
    return $valor * $CotacaoPeso;
  }
    
  function LibraParaReal ($valor, $CotacaoLibra){
    return $valor * $CotacaoLibra;
  }

  function IeneParaReal ($valor, $CotacaoIene){
    return $valor * $CotacaoIene;
  }
  }


namespace areas{
  function areaQuadrado ($lado){
    return $lado * $lado;
  }

  function areaRetangulo($base, $altura){
    return $base * $altura;
  }

  function areaTriangulo($base, $altura){
    return $base * $altura / 2;
  }
    
  function areaCirculo($raio){
    return 3.14 * $raio * $raio;
  }

  function areaTrapezio($baseMaior, $baseMenor, $altura){
    return ($baseMaior + $baseMenor) * $altura / 2;
  }
  }

namespace saude{
  function calcularImc ($peso, $altura){
    return $peso / ($altura * $altura);
  }

  function avalorIdealAgua ($peso){
    return $peso * 35;
  }

  function frequenciaCardiacaMaxima ($idade){
    return 208 - 0.7 * $idade;
  }
    
  function converterLibrasParaQuilo ($libras){
    return $libras * 0.453592;
  }

  function calcularCaloriasBasais ($peso, $idade, $sexo, $altura){
    
    if ($sexo == "masculino"){
      return $peso * 10 + 6.25 * $altura - 5 * $idade + 5;
    }

    else{
      return $peso * 10 + 6.25 * $altura - 5 * $idade - 161;
    }
  }
}
?>