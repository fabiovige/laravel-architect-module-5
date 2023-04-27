<?php

namespace Fabiovige\Modulo5\Services;

use Fabiovige\Modulo5\Providers\Interfaces\PaymentProviderContract;

class Checkout
{
    public function __construct(private string $email, private int $amount){}

    public function handle(PaymentProviderContract $paymentProvider)
    {
        return $paymentProvider->charge($this->email, $this->amount);
    }
}