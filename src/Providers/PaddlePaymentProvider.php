<?php

namespace Fabiovige\Modulo5\Providers;

use Fabiovige\Modulo5\Providers\Interfaces\PaymentProviderContract;
use Fabiovige\Modulo5\Utils\Http;

class PaddlePaymentProvider implements PaymentProviderContract
{
    public function __construct(Http $clientHttp)
    {

    }

    public function charge(string $email, int $amount): string
    {
        return "We successfully charged EUR {$amount} from {$email}";
    }
}