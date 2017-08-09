<?php


$pceltaBDay = new DateTime("1987-02-09 00:00:00");


// This code add 1Y ear, 2M onths, 3D ays, T=Time identifier, 2H ours, 17M inutes and 37S econds
$interval = new DateInterval("P1Y2M3DT2H17M37S");

// If this attribute is set as 1 this interval is going to be negative(by default is 0)
$interval->invert = 1;

$pceltaBDay->add($interval);

echo "<pre>";

print_r($pceltaBDay);