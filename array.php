<?php
// array is collection of data

// array types :-
 // index array 
 // associative array

 // index :-
//  example:- 
//  $number = array(64, 67, 98, 89);
//  $name = [ 'kamlesh', 'amit'];
//  $address = [ 'kamlesh', 87, 'kumar@.com'];

 // associative array
//$add = ['name'=>'kamlesh', 'age'=>87,'email'=>'kumar@.com'];

 $address = ['name'=>'kamlesh', 'age'=> 25, 'place'=>'siwan'];
foreach($address as $v){
    echo $v, '<br>';
}
 
?>