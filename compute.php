<?php

$total = (double)$_POST["totalBill"];
$numPeople = (double)$_POST["numPeople"];
$tax = (double)$_POST["tax"];
$tip = (double)$_POST["tip"];

$tipIsDollar = true;

if($numPeople > 0) // Avoiding division by zero when form is empty when app is launched
{
    if($tipIsDollar)
    {
        $result = ( $total * (($tax/100) + 1) + $tip ) / $numPeople ;
    }
    else // tip is percentage
    {
        $result = ( $total * (($tax/100) + 1) + $total * (($tip/100) + 1) ) / $numPeople ;
    }
}

?>