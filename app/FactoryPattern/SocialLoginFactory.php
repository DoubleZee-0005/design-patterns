<?php
namespace App\FactoryPattern;

use Exception;
use Symfony\Component\HttpFoundation\Response;
use App\FactoryPattern\Providers\GoogleProvider;
use App\FactoryPattern\Providers\FacebookProvider;
use App\FactoryPattern\Contracts\SocialLoginProvider;
use App\FactoryPattern\Providers\TwitterAkaXProvider;

class SocialLoginFactory
{
    public static function createProvider(String $provider): SocialLoginProvider{        
        switch($provider){
            case 'facebook':
                return new FacebookProvider();
            case 'google':
                return new GoogleProvider();
            case 'twitter':
                return new TwitterAkaXProvider();
            default:
                throw new Exception('Unsupported provider', Response::HTTP_BAD_REQUEST);
        }
    }
}