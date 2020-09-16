<?php 


    function explode__($iterator,$string){
        $iteratorLength = strlen($iterator);
        $str = '';
        if($iteratorLength == 1){
            for($i = 0; $i < strlen($string); $i++){
                    if($string[$i] == $iterator){
                        $returnArr[] = $str;
                        $str = '';
                    }else{
                        $str .= $string[$i];
                        if($i == strlen($string)-1){
                            $returnArr[] = $str;
                        }
                    }
            }
        }else{
            for($i = 0; $i < strlen($string); $i++){
                if($string[$i] == $iterator[0]){
                    $longIterator = '';
                    for ($x=$i; $x < $iteratorLength+$i; $x++) { 
                        $longIterator .= $string[$x];
                    }
                    if($longIterator == $iterator){
                        $i = $i + $iteratorLength;
                        $returnArr[] = $str;
                        $str = '';
                    }else{
                        $str .= $string[$i];
                        if($i == strlen($string)-1){
                            $returnArr[] = $str;
                        }
                    }
                }else{
                    $str .= $string[$i];
                    if($i == strlen($string)-1){
                        $returnArr[] = $str;
                    }
                }
            }
        }
        return $returnArr;
    }
    ?>
