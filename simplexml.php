<?php

$simpleXml = simplexml_load_file(__DIR__ . '/xml.xml');
echo $simpleXml->book[0]->title;


return;



$simpleXmlError = simplexml_load_file(__DIR__ . '/xml-fake.xml'); // file does not exist


$simpleXmlErrorTwo = simplexml_load_string('>>>'); // invalid xml