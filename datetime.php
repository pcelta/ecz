<?php


$pceltaBDay = new DateTime("1987-02-09 00:00:00");
$bibiBDay = new DateTime("1989-06-09 00:00:00");

$diff = $pceltaBDay->diff($bibiBDay);
$diff = $bibiBDay->diff($pceltaBDay);

echo "<pre>";
print_r($diff);