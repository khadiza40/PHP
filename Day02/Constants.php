<!-- Constants -->
<?php
// variable can changeable not work as global
$x = 5;
$x = 12;

//Constant doesn't changeable  and can work as global variable 
define('a', '17');
define('b',17);
define('A',18);
define('cars',[
'BMW',
'Toyota',
'Mazda'
]);

echo (a) . '<br>';
var_dump(a) .  '<br>';
 echo '<br>'.(b) . '<br>';
var_dump(b) . ' <br>';
echo '<br>'.(A) . '<br>';
var_dump(A) . ' <br>';

echo '<br>'.(cars[1]) . '<br>';
var_dump(cars) . '<br>'.' <br>';


?>
