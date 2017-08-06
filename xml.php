<?php

function start($resource, $name, $attrs = [])
{
    echo sprintf('start:%s%s', $name, PHP_EOL);
    print_r($attrs) . PHP_EOL;
}

function endy($resource, $name, $attrs = [])
{
    echo sprintf('end:%s%s', $name, PHP_EOL);
    print_r($attrs) . PHP_EOL;   
}

function character($resource, $data)
{
    echo sprintf('character:%s', PHP_EOL);
    print_r($data) . PHP_EOL;   
}

$resource = xml_parser_create();
xml_set_element_handler($resource, 'start', 'endy');
xml_set_character_data_handler($resource, 'character');

$xml = file_get_contents(__DIR__ . '/xml.xml');
xml_parse($resource, $xml);