<?php
namespace App\FactoryPattern\Providers;

use App\FactoryPattern\Contracts\SocialLoginProvider;

class GoogleProvider implements SocialLoginProvider
{
    public function authenticate()
    {
        // Authenticate with Google
        return 'Google';
    }
}