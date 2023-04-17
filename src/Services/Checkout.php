<?php

namespace Fabiovige\Modulo5\Services;

use Fabiovige\Modulo5\Providers\StripePaymentProvider;
use Fabiovige\Modulo5\Utils\Http;

class Checkout
{
    public function __construct(private string $email, private int $amount){}

    public function handle()
    {
        $stripeProvider = new StripePaymentProvider(new Http);
        return $stripeProvider->charge($this->email, $this->amount);
    }
}