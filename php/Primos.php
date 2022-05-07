<?php
if($ano = !empty($_GET['ano'])?intval($_GET['ano']):false)
{
    $result = ceil($ano/100);
}else $result = "";

?>