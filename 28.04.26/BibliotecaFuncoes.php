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

?>