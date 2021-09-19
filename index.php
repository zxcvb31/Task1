<?php
$a = file_get_contents('http://task1/news.php');
$link = 'http://task1/news.php';
$StringB = mb_substr($a, 0,180);
$WordsArray=explode(' ', $StringB);
$PartWithoutLinks="";
for($i=0;$i<count($WordsArray)-3;$i++) $PartWithoutLinks=$PartWithoutLinks.' '.$WordsArray[$i];
$b = $PartWithoutLinks. '<a href="' . $link . '">' .' '. $WordsArray[count($WordsArray)-3] .' '.$WordsArray[count($WordsArray)-2] .' '.$WordsArray[count($WordsArray)-1]. '...</a>';
echo $b;
?>