    <!-- print function in PHP -->
    <h1><?php echo  "Welcome to php". '. <br>'; ?></h1>


    <?php  
    
    $num1 = 20;
    $num2 = 10;

    echo $num1+$num2 . '. <br>';
    echo ($num1-$num2) . '. <br>';
    print $num1*$num2 . '. <br>';
    print ($num1/$num2). '. <br>';


/*    echo is litte bit fast than print .
    cause print return 1 so add last 1.
    so echo is fast and print is slow  */

    //in here print return 1
    print $num2 . '<br>';
$names = print('BK') . '<br>';
echo $names;    
    ?>
   
    
