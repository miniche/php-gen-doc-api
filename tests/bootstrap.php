<?php

$loader = require __DIR__ . "/../vendor/autoload.php";
$loader->addPsr4('Zckrs\\GenDocApi\\', __DIR__ . '/src');

require_once __DIR__ . '/sample/Client.php';

date_default_timezone_set('UTC');
