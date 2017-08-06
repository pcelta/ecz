<?php

$string = '<movies><movie><title>Matrix</title></movie><movie><title>60 Seconds</title></movie></movies>';

$dom = new DOMDocument("1.0", "utf-8");
$dom->loadXML($string);

$movies = $dom->getElementsByTagName('movies');
print_r($movies->item(0));