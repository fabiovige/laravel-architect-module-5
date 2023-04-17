<?php
namespace Fabiovige\Modulo5\Providers;

use Fabiovige\Modulo5\Utils\Http;

class StripePaymentProvider
{
    public function __construct(Http $clientHttp)
    {
        
    }

    public function charge(string $email, int $amount)
    {
        return "We successfully charged USD {$amount} from {$email}";
    }
}