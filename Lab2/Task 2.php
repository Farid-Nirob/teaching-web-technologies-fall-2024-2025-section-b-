<?php
$amount = 5000;
function vat($amount)
{$vatAmount = (15/$amount)*100;
return $vatAmount;}

$vat = vat($amount);
echo"Total amount is 5000\r\n";
echo "Vat need to be paid is ". $vat ;
?>