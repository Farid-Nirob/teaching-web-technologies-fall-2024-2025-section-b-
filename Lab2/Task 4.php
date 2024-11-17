<?php 
$num1=10;
$num2= 100;
$num3 = 1000;

if($num1>$num2 && $num1 > $num3)
{
    echo"Number " . $num1 ." is largest \r\n";
}
else if($num2>$num1 && $num2> $num3)
{
    echo "Number ". $num2 ." is largest\r\n";
}
else
{
    echo "Number ". $num3 ." is largest\r\n";
}
?>