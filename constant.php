<?php

define('CONSTANT', 1);
define('_CONSTANT', 0);

define('EMPTY', '');

if (!empty(EMPTY)) {
    if (!((boolean) _CONSTANT)) {
        print "One";
    }
}