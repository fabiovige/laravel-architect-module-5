<?php

namespace Fabiovige\Modulo5\Services;

use Fabiovige\Modulo5\Providers\StripePaymentProvider;

class Checkout
{
    public function __construct(private string $email, private int $amount){}

    public function handle()
    {
        $stripeProvider = new StripePaymentProvider;
        return $stripeProvider->charge($this->email, $this->amount);
    }
}