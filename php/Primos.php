<?php
require_once "ArrayPrimos.php";
$result_array=[];

$result = "";
if(!empty($_GET['start'])&&!empty($_GET['end']))
{
    $start = intval($_GET['start']);
    $end = intval($_GET['end']);
    for ($i=$start; $i < $end; $i++) { 
        if($i>$start&&(($i%2)!=0)){
            array_search($i,ArrayPrimos::numbers())?array_push($result_array,$i):0;
        }
    }
    $result = json_encode($result_array);
    
}

?>