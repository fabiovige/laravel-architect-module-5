<?php
namespace Fabiovige\Modulo5\Providers;

class StripePaymentProvider
{
    public function charge(string $email, int $amount)
    {
        return "We successfully charged USD {$amount} from {$email}";
    }
}