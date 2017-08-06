<?php

namespace LocalNamespace {
    class LocalClass {}
}



namespace myapp\utils\hello {

    function world() 
    {
        echo 'world function';
    }
}

namespace diff {
    use myapp\utils\hello;

    hello\world();
}