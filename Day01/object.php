<?php
class phone {
    var $model;
    function phoneModel($number){
        global $model;
        $model = $number;
        echo "This is $model <br>";
    }
}

$oppo = new Phone;
$oppo -> phoneModel(' Oppo vx 13');

$samsung = new Phone;
$samsung -> phoneModel(' Samsung ui-3 24');

$huawei = new Phone;
$huawei -> phoneModel('HUawei YU  7P');

 ?>