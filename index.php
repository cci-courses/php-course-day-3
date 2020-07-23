<?php

use Demo\HelloWorldService;

require_once 'vendor/autoload.php';

$service = new HelloWorldService();
$service->welcome();
