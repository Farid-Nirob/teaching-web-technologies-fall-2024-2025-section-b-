<?php
$num1 = 5;
$num2 = 10;

function evenOdd($number)
{
    if($number % 2 == 0)
    {
        echo"The number ".$number. " is even \r\n";
    }
    else
    {
        echo"The number ".$number. " is odd\r\n";
    }
}
$result = evenOdd($num1);
$result = evenOdd($num2);
?>