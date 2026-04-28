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
?>