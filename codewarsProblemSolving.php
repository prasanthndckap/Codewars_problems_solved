<?php


// /*
// problem no:2
Clock shows h hours, m minutes and s seconds after midnight.

Your task is to write a function which returns the time since midnight in milliseconds.

function past($h, $m, $s) {
$hour = $h * 60 * 60  * 1000;
  $minute = $m * 60 * 1000;
  $sec = $s *1000;
  return $hour +  $minute + $sec;
}
//anothor solution
function past($h, $m, $s) {
return (($h * 60 *60)+$m*60 + $s ) * 1000;
  }
// */

//function remove_char($s) {
//    echo substr($s,1,-1);
//}
//remove_char("prasanth");


//function remove_char(string $s): string {
//
//    $str = substring(1, length()-1);
//    return $str;
//
//}
/*
 *
//removeing the Exclamation_marks from the staring
function remove_exclamation_marks($string) {
    // Your code here.
    echo str_ireplace("!","",$string) ;
//
}

remove_exclamation_marks("hello!");

*/
//Create a function with two arguments that will return an array of the first n multiples of x.

//Assume both the given number and the number of times to count will be positive numbers greater than 0.

//function countBy($x, $n) {
//    for ($i=$x;$i<=$n;$i+=$x)
//    {
//        echo $i;
//    }
//}
//countBy(2,10);


//function countBy($x, $n) {
//    echo range($x, $n * $x, $x);
//}
//countBy(2,10);
/*
function countBy($x, $n) {
    $z = [];

    for($i = 1; $i <= $n; $i++) {
        $z[] = $i * $x;
    };

    return $z;
}
*/

/*
function grow($a) {
    $sum= 1;
    // Your code here
    for($i=0;$i<count($a);$i++){
        $sum *=$a[$i];
    }
    echo $sum;
}
grow([1,2,3,4]);
*/

/*
function grow($a) {
    // Your code here
    echo array_product($a);
}
grow([1,2,3,4,19]);

*/


//function move($pos, $roll) {
//    // your code here
//   echo $mul = $pos + $roll * 2;
//
//}
//move(3,6);


/*
function hero(int $bullets, int $dragons){

    $total = $dragons *2;
//    echo $total;
    if($bullets >= $total ){
        return true;
    }else{
        return false;
        throw new Exception("Function not implemented");

    }

}
hero(10,5);

*/

/*
//reversing  number form $n to 1
function reverseSeq ($n) {
//   return null;
    $x = [];
    for($i =$n;$i>0;$i--){
        $x[]=$i;
  }
    return $x;
};
/*
function reverseSeq ($n) {
  while($n>=1) {
    $arr[] += $n--;
  }
  return $arr;
};
*/


/*
function even_or_odd( $n) {
    // Your code here
    if($n%2==0){
        echo "even";
    }else{
        echo "Odd";
    }
}
/*
even_or_odd(0);
function even_or_odd(int $n): string {
    return $n % 2 ? "Odd" : "Even";
}
*/
/*
//if the two odds or even match it will return false it doest match it will return false
function lovefunc($flower1, $flower2) {
    // moment of truth
    $first = $flower1 % 2==0 ? 0 : 1;
    $second = $flower2 % 2==0 ? 0 : 1;
    if($first === $second){
       echo false;
  }else {
        echo true;
    }
}
lovefunc(2, 4);
*/

/*

function lovefunc($flower1, $flower2) {
    if ((($flower1 + $flower2) % 2) == 0) {
        return false;
    } else {
        return true;
    }
}

lovefunc(50,50);
*/

// print the smallest number in the array

//function smallestInteger ($arr) {
//    #your code here
//    $firstvalues = $arr;
//    for($i=1;$i<count($arr);$i++){
//
//
//    }
//}
//smallestInteger([3, 5, 10, 1, 4, 55]);
/*
function smallestInteger ($arr) {
    #your code here
    $smallValue = $arr[0];
  for($i=0;$i<count($arr);$i++){
      if($arr[$i]<$smallValue){
          $smallValue = $arr[$i];
      }

  }
    echo $smallValue;
}

smallestInteger([3, 5, 10, 1, 4, 55]);
*/

//the  employe is have an work and hes on the vacation its will print the true.
//if the employe is not in vacation and he not an employed it will print the galse
/*

function setAlarm(bool $employed, bool $vacation): bool {
    // your code here
    if($employed == true && $vacation == false){
        return true;
    }else{
        return false;
    }
}
echo setAlarm(true, false);

*/

//dived the year by 4 and print the given month is which season

/*

function quarterOf($month) {
    // Your code here

    if($month <=3){
        echo "";
    }elseif($month<=6){
        echo 2;
    }elseif($month<=9){
        echo 3;
    }else if ($month <=12){
    echo 4;
    }
}
quarterOf(6);
*/


// reverse the string
/*

function solution($str) {
    // Your code here
//    echo strlen($str);
    $value = ' ';
    for($i=strlen($str)-1;$i>=0;$i--){
        $value.=$str[$i];
    }
    echo $value;


}
 solution("world");
*/

/*
function checkForFactor($base, $factor) {
//     your code here
    $Total = $base * $factor;
    if($Total % 2==0){
        echo true;
    }else{
        echo false;
    }
$base % $factor == 0;
}
checkForFactor(2463,6);
*/

/*
function countsheep($num){
    $output = '';
    for ($i = 1; $i <= $num; $i++) {
        $output .= $i . ' sheep...';
    }
    return $output;
}

*/

//function getGrade($a, $b, $c) {
//    // your code here
//   $add = $a + $b +$c;
////   echo $add."\n";
// echo $total = $add / 3;
//
// if($total >= 90){
//     echo A;
// }elseif($total >=80){
//     echo B;
// }
//
//}
//getGrade(80,90,98);

/*

//print the array Total value is even or odd
function odd_or_even(array $a)  {
    $suma = 0;
    for($i = 0; $i<count($a); $i++){
        $suma +=$a[$i];

    }
    $resto = $suma % 2;
    if( $resto == 0 ){
        echo "even";
    }else{
        echo "odd";
    }
}
odd_or_even([1,3,4,5,24]);

*/



//Complete the square sum function so that it squares each number passed into it and then sums
// the results together.
/*
function square_sum($numbers)  {
    // Write your code here...

    $total = 0;
    for($i=0;$i<count($numbers);$i++){
        $total += $numbers[$i] **2;
    }
    return $total;
}
square_sum([1,2,2]);
*/

//anothor solution  for the question
/*
function square_sum($numbers) : int {
    $sum  = 0;

    foreach($numbers as $item) {
        $sum += pow($item,2);
    }

    return $sum;
}
*/

/*

// print the string the till middle of the string

function getMiddle($text) {
//    $new = "";
//for($i=0;$i<strlen($text);$i++){
//echo $text[$i];
//}
   $divide = strlen($text) /2;
echo $divide;
for($i=0;$i<$divide;$i++){
echo $text[$i];
}
}
getMiddle("prasanth");
*/

//function sum_mix($a) {
//    // Your code here
//    for($i=0;$i<count($a);$i++){
//        if($a[$i] === string){
//            echo $a[$i];
//        }
//  }
//}