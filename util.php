<?php
    function stringifyArray(array $formData): string{
        $keys = array_keys($formData);

        $formDataString = "";

        for($i = 0; $i < count($formData); $i++){
            $key = $keys[$i];
            if($i == count($formData) - 1){
                $formDataString .= $formData[$key];
                break;
            }
            $formDataString .= $formData[$key] . ", ";
        }

        return $formDataString;
    }
    
// Deixar para depois...
    function stringToArray(string $stringc, array $keys){
        $elements = [];
        $word = "";

        // Separação das palavras por , 
        for($i = 0; ; $i++){
            // Concatena com a letra
            if( $stringc[$i] !== "," || 
                $stringc[$i] !== " " ) {
                    $word .= $stringc[$i];
                }
            echo $stringc[$i];
            
            // Se o separador for , espaço ou for nulo o próximo valor
            if((!isset($stringc[$i+1])) || 
            $stringc[$i] . $stringc[$i+1] === ", "){
                echo $word;
                $elements[] = $word;
                $word = "";
            }

            // Se o próximo valor for nulo
            if(!isset($stringc[$i+1])){
                break;  
            } 
        }

        var_dump($elements);
        
    }