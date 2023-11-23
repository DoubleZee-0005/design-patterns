<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\FactoryPattern\SocialLoginFactory;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    public function socialLogin(Request $request){
        try {
            $provider = $request->social_provider;
            $socialLoginProvider = SocialLoginFactory::createProvider($provider);
            $data = $socialLoginProvider->authenticate();

            $response = $this->sendResponse('Login successful', Response::HTTP_OK, $data);
        } 
        catch (Exception $exception) {
            $response = $this->sendResponse($exception->getMessage(), $exception->getCode());
        }

        return $response;
    }
}
