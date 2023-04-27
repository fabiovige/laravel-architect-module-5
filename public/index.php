<?php

use Fabiovige\Modulo5\Services\Checkout;
use Fabiovige\Modulo5\Providers\CieloPaymentProvider;
use Fabiovige\Modulo5\Providers\StripePaymentProvider;
use Fabiovige\Modulo5\Providers\PaddlePaymentProvider;
use Fabiovige\Modulo5\Base\Container;
use Fabiovige\Modulo5\Providers\Interfaces\PaymentProviderContract;

require __DIR__ . '/../vendor/autoload.php';

$container = new Container();
$container->register(PaymentProviderContract::class, PaddlePaymentProvider::class);

$paymentProvider = $container->get(PaymentProviderContract::class);

$service = new Checkout("fabiovige@gmail.com", 1234);

$testeProvider = $container->get(PaymentProviderContract::class);

echo $service->handle($paymentProvider);
