<?php

/////// Q1 ///////

// $age=15;
// if($age>18){
//     echo "Register is valid";
// }else{
//     echo"Register is invalid";
// }

/////// Q2 ///////

// function calc($x , $y){
//     echo "The mult = ".$x * $y ."<br>";
//     echo "the sub = ".$x - $y ."<br>";
//     echo "the mod = ". $x % $y ." <br>";
// }
// calc(25,5);

/////// Q3 ///////

// $arr =[24,85,17,11,9,32];

// function arr_sum ($a){
//     $sum=0;
//     foreach($a as $num){
//         $sum+=$num;
//     }
//     return $sum;
// }
// $result=arr_sum($arr);
// echo "The sum of array : $result";

/////// Q4 ///////

// $films=array("Fast","Predestination","Persuit","Prestige");
// $keyword="avatar";
// $result=false;

// foreach($films as $film){
//     if($film == $keyword){
//         $result=true;
//         break;
//     }
// }
// if($result==true){
//     echo"yes";
// }else{
//     echo"no";
// }

/////// Q5 ///////

// function RouteBubble(&$arr, $n) {
//     for ($i = 0; $i < $n-1; $i++) {
//         for ($j = 0; $j < $n-$i-1; $j++) {
//             if ($arr[$j] > $arr[$j+1]) {
//                 $temp = $arr[$j];
//                 $arr[$j] = $arr[$j+1];
//                 $arr[$j+1] = $temp;
//             }
//         }
//     }
// }

// $arr =[57, 13, 98, 42, 16];
// $n = count($arr);

// RouteBubble($arr, $n);

// echo "Sorted array: <br> ";
// foreach($arr as $x){
//     echo $x."  ";
// }


/////// Q6 ///////

// $tests=array(5,4,9,3,1,7,5,55,6);
// $maxx=$tests[0];
// foreach($tests as $x){
//     if($maxx < $x){
//         $maxx=$x;
//     }
// }
// echo "The max in array : $maxx";


/////// Q7 ///////

// $films=array("avatar","Prestige","avatar","Prestige");
// $keyword="avatar";
// $count=0;

// foreach($films as $film){
//     if($film == $keyword){
//         $count++;
//     }
// }
// echo "The number of Repate : $count";



/////// Q8 ///////

// function RouteRandomPass($n) {
//     $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     $string = '';
    
//     for ($i = 0; $i < $n; $i++) {
//         $random_char = random_int(0, strlen($char) - 1);
//         $string .= $char[$random_char];
//     }
//     return $string;
// }
// echo RouteRandomPass(5); 


/////// Q9 ///////

// $tests=array(1,"tariq",1.5,true,7,'s',false); 
// foreach($tests as $x){
//     if(is_bool($x)){
//         echo ($x ? "yes":"no") ."<br>";
//     }else{
//         echo $x ."<br>";
//     }
// }


// $tests=array(1,"tariq",1.5,true,7,'s',false);
// $i=0;
// while($i<count($tests)){
//     if(is_bool($tests[$i])){
//         echo ($tests[$i] ? "yes" : "no")."<br>";
//     }else{
//         echo $tests[$i] ."<br>";
//     }
//     $i++;
// }


/////// Q10 ///////

// $tests = array(6, 4, 9, 3, 12, 8, 7);
// sort($tests);

// echo "<pre>";
// print_r($tests);

/////// Q11 ///////

// $arr1=array('a','b','c','d'); 
// $arr2=array('c','d','e','f');
// $in_all=[];

// foreach($arr1 as $a1){
//     if(in_array($a1,$arr2)){
//         $in_all[]=$a1;
//     }
// }
// print_r($in_all);
// OR
// foreach($in_all as $x){
//     echo "$x <br>";
// }


/////// Q12 ///////

?>