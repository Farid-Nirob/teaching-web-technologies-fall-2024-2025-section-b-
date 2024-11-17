<?php
echo "Length = 5\r\n";
echo "Width = 2\r\n";
function Area($length,$width)
{ return $length*$width;}

$recArea = Area(5,2);

function Perameter($length,$width)
{ return 2*($length+$width);}

$recPerameter = Perameter(5,2);

echo"Area of the Rectangle = " . $recArea . "\r\n";
echo"Perameter of the Rectangle = " . $recPerameter;
?>