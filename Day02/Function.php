<!-- Function.php -->

<?php
//function
function factor(){
    for($i= 2; $i <= 20; $i+=2){
       echo "The number is : $i <br>";        
}
}
//use parameter
function factorial($num){
  if ($num == 1){
        return 1;
    }
    return $num * factorial($num-1);
}
//parameter error handle
function INFO($name , $age =22){
    
       echo "The name is : $name <br>";        
       echo "The age is : $age <br>";        
}
//function call
echo "<br> Factors numbers are : <br>";
factor();
echo "<br> Name and age  : <br>";
INFO("Khadiza");
echo "<br> Factorial number is : <br>";
echo "The Factorial is of this number  :". factorial(6)." <br>";     



?>