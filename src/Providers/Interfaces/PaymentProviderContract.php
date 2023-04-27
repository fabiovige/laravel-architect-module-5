<?php

namespace Fabiovige\Modulo5\Providers\Interfaces;

use Fabiovige\Modulo5\Utils\Http;

interface PaymentProviderContract
{
    public function __construct(Http $http);

    public function charge(string $email, int $amount): string;
}