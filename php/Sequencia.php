<?php
$rep_array=[];
$cont=0;
$result = "";
$number = $_GET['array']??"";
if($number){
    $result = "Verdadeiro";
    $number = explode(',',$number);
    for ($i=0; $i < count($number); $i++) { 
        if(array_search($i,$number)){
            $cont++;
            if($cont>2){
                $result = "Falso";
                break;
            }
        } 
        
    }
}

?>