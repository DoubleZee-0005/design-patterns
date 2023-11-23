<?php
namespace App\FactoryPattern\Providers;

use App\FactoryPattern\Contracts\SocialLoginProvider;

class TwitterAkaXProvider implements SocialLoginProvider
{
    public function authenticate()
    {
        // Authenticate with TwitterAkaX
        return 'TwitterAkaX';
    }
}