<?php

spl_autoload_register(function ($class) { include 'classes/' . $class . '.php'; });

$obj1 = new myclass1();
$obj2 = new testclass1();
