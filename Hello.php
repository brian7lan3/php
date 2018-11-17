<?php

$myArray = array("巧克力", "牛奶", "冰淇淋");
// echo $myArray;
print_r($myArray);
echo "<hr>";
print_r($myArray[1]);
echo "<hr>";
echo $myArray[2];
echo "<hr>";

$anotherArray[1] = "草莓";
$anotherArray[0] = "果醬";
$anotherArray[3] = "吐司";
print_r($anotherArray);
echo "<hr>";

$thirdArray = array(
    "eng" => "英文",
    "kor" => "韓文",
    "jap" => "日文"
);
print_r($thirdArray);
echo "<hr>";

echo $thirdArray["eng"];
echo $thirdArray["韓文"];//不行


?>