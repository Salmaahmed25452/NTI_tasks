<?php

session_start();

//echo "The Number of item".$_SESSION['num'];

$price=$_SESSION['price'];
$number_item=$_SESSION['num'];

$total_price=$price*$number_item;
$dis_value;

if($total_price >= 1000){
    $dis_value=0.15;
    $total_aft=$total_price - $total_price*$dis_value;

}else{
    $dis_value=0.10;
    $total_aft=$total_price - $total_price*$dis_value;

}

echo "Total Price : $total_price $ <br>";
echo "Total Price After discount : $total_aft $ <br>";



?>