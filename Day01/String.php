<?php
//string length
echo strlen('Love came from Heaven!') . '<br>';
//string word count
echo str_word_count('Love came from Heaven!'). '<br>';
////string reverse
echo strrev('Love came from Heaven!'). '<br>';
//string word replace
echo str_replace('Love','Marriage','Love came from Heaven!'). '<br>';
//string position find
echo strpos('Love came from Heaven!' , 'Heaven'). '<br>';
//string position if not found
$test = strpos('Love came from Heaven!' ,'Peace');
var_dump($test);
?>