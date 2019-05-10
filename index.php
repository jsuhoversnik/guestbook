<?php

//turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);


//Require autoload file
require_once('vendor/autoload.php');

//create an instance of the Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /',function(){
    echo '<h1>My Guestbook Apps</h1>';
});

$f3->run();
