<?php
// $price = [ 8,65,87,8,4,67,8];
// krsort($price);
// print_r($price);

// count array
$data = [ 1,2,4,5,5,7,8,9,34,5,5];
//echo count($data);

// $name =[];    // empty array

// if (empty($name)){
//     echo 'no data present!';

// } else{
//     echo 'number of element data!', count($name);
// }

   //compact array

//    $a=7; $b=6; $c=9;
//   $result = compact('a', 'b', 'c');
//   print_r($result);

 $color =['color'=>'red', 'size'=>'small', 'height'=>900];

// extract($color);
// echo $height , $color, $size;

// list($first,$second) =$data;
// echo $first, $second;

//array_merge

// $result = array_merge($data, $color);
// print_r($result);

//combine array

// $num = [ 'color', 'size', 'height'];
// $value = [ 'red', 88, 100];

// $new_array = array_combine($num, $value);
// print_r($new_array);


//slice array

$a = array_slice($data, 0, 2);
print_r($a);

echo '<hr>';

//chunk array

$b = array_chunk($color, 2);
print_r($b);












?>
