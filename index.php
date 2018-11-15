<?php
require_once __DIR__.'/init.php';

$response->setContent('hi!');
$response->send();
