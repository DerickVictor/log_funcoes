<?php

namespace matematíca;{

    function soma($a, $b,){
    return $a + $b;
    }       
    function subtrair($a, $b){
    return $a - $b;
    }
    function multiplicar($a, $b){
    return $a * $b;
    }
    function dividir($a, $b){
    return $a / $b;
    }
    }

namespace texto;{


    function Concatenar ($nome, $sobrenome){
        return $nome . " " . $sobrenome;
        }
    }
    
    
    
    
    
    


namespace logica;{
    function verificaidade ($idade){
        if($idade >= 18){
            echo "maior de idade";
        }

        else{
            echo "menor de idade";
        }
    }
    function verificaexercito ($sexo, $idade){
        if($idade >= 18 && $sexo == "masculino"){
                return "você está habito a servir o exército!";
        }    
        else{
            return "Você não cumpre aos requisitos!";
            }
           
    }
    }
?>