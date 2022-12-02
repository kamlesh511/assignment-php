<?php
// for() loop

$data = [ 'Home', 'About us', 'Contact'];
echo '<ul>';

foreach($data as $y){
    echo "<li>$y</li>";
}
    echo '<ul>';

?>
<hr>
<?php

for($x=1;$x<=10;$x++){
    echo $x * 2, '<br>';


}