<?php
//TASK 1
function repeat($arr)
{
    if (is_array($arr)) {

        $arr = array_merge(...array_fill(0, 3, $arr));
    } else {
        $result = array();
        for ($i = 0; $i < 3; $i++) {
            array_push($result, $arr);
        }
        $arr = $result;
    }
    print_r($arr);
}


//TASK 2
function reformat($str)
{
    if (is_string($str)) {
        echo ucfirst(
            str_replace(
                array('a', 'e', 'i', 'o', 'u'),
                "",
                strtolower($str)
            )
        );
    } else {
        echo "Enter a string";
    }
}


//TASK 3
function next_binary_number($b){
    if(gettype($b)=='array'){
        $isBinary = true;
        for($i=0;$i<count($b);$i++){
            if($b[$i]!=0 && $b[$i]!=1){
                $isBinary=false;
                break;
            }
        }

        if($isBinary){
            $carry = 0;
            $result = [];

            for($i=count($b)-1 ; $i>=0; $i--){
                if(!$carry){
                    $b[$i] += 1;
                    if($b[$i]==1){
                        break;
                    }
                    else{
                        $b[$i] = 0;
                        $carry = 1;
                    }
                }else{
                    $b[$i] += $carry;
                    if($b[$i]==1){
                        $carry = 0;
                        break;
                    }
                    else{
                        $b[$i]=0;
                    }
                }
                
            }
        
            if($carry){
                $result[0] = 1;
                $j = 1;
                for($i=0 ; $i<count($b); $i++){
                    $result[$j]=$b[$i];
                    $j++;
                }
            }
            else{
                $result = $b;
            }

            print_r($result);
        }
        else{
            echo "not binary";
        }
    }
    else{
        echo "not array";
    }
}




