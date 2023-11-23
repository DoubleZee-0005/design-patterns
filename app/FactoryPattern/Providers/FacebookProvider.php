<?php
namespace App\FactoryPattern\Providers;

use App\FactoryPattern\Contracts\SocialLoginProvider;

class FacebookProvider implements SocialLoginProvider
{
    public function authenticate()
    {
        // Authenticate with Facebook
        return 'Facebook';
    }
}
