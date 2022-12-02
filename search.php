<?php
$data = [ 8,8,5,7,4,3,5,555,9];
$color = ['color'=>'red', 'size'=>'small'];

//in_array()

// if(in_array('yellow',$color)){
//     echo 'The red color is present';
// }else{
//     echo ' The red color is not present';
// }

echo array_search('red',$color);
?>
