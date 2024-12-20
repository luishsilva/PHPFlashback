<?php

const BASE_PATH = __DIR__ .'/../'; 

require(BASE_PATH.'Core/functions.php');

// autoload Database class because it's being instantiated in the controller ($db = new Database($config['database']);)
spl_autoload_register(function ($class) {
    $class = str_replace('\\',DIRECTORY_SEPARATOR, $class);

    require base_path( "{$class}.php");
});

require(base_path('Core/router.php'));

