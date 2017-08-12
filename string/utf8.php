<?php

$str = 'ÿÿüüüüüü';

echo strlen($str); // unicode characters consume double, so this code is going to print: 16

echo PHP_EOL;

echo strlen($str . '  '); // as the spaces are common characters here is going to print: 18