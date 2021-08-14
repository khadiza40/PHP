<!-- ConditionalStatement.php -->
<!-- if and else -->

<?php
$date = date('H');

if (4<9){
    echo 'This is True' .'<br>';
}
elseif ($date <20){
    echo 'Good Morning ' .$date .'<br>';
}else {
    echo 'Good Morning ' . '<br>'; 
}

?>