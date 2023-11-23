<?php

namespace App\FactoryPattern\Contracts;

interface SocialLoginProvider
{
    public function authenticate();
}