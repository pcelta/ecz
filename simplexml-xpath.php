<?php

$simpleXml = simplexml_load_file(__DIR__ . '/xml.xml');

$harryPotter = $simpleXml->xpath('/bookstore/book[@ISBN="ISBN-HP"]');

echo "<pre>";
print_r($harryPotter);

$lordOfTheRings = $simpleXml->xpath('/bookstore/book[pages>500]');
print_r($lordOfTheRings);


$both = $simpleXml->xpath('//book[pages>200]');
print_r($both);