<?php
$result_array=[];
$rep_array=[];

for ($i=0; $i < 20; $i++) { 
    $number = intval(rand(1,10));
    array_push($result_array,$number);
    array_search($number,$result_array)?!array_search($number,$rep_array)?array_push($rep_array,$number):0:0;
}
$resul_rep = json_encode($rep_array);
$resul_arr = json_encode($result_array);
?>