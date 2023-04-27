<?php

use Fabiovige\Modulo5\Services\Checkout;
use Fabiovige\Modulo5\Providers\CieloPaymentProvider;
use Fabiovige\Modulo5\Providers\StripePaymentProvider;
use Fabiovige\Modulo5\Providers\PaddlePaymentProvider;
use Fabiovige\Modulo5\Utils\Http;
use Fabiovige\Modulo5\Base\Container;

require __DIR__ . '/../vendor/autoload.php';

$container = new Container();
$paymentProvider = $container->get(PaddlePaymentProvider::class);

$service = new Checkout("fabiovige@gmail.com", 1234);
echo $service->handle($paymentProvider);
