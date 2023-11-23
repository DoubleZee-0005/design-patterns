<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FactoryPattern\SocialLoginFactory;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    public function socialLogin(Request $request){
        $provider = $request->social_provider;
        $socialLoginProvider = SocialLoginFactory::createProvider($provider);
        $data = $socialLoginProvider->authenticate();

        return $this->sendResponse('Login successful', Response::HTTP_OK, $data);
    }
}
