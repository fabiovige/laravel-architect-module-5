<?php

use Fabiovige\Modulo5\Services\Checkout;

require __DIR__ . '/../vendor/autoload.php';

$service = new Checkout("fabiovige@gmail.com", 1234);
echo $service->handle();
