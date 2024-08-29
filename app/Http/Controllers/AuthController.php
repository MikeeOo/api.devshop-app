<?php

namespace App\Http\Controllers;

use App\Traits\HttpResponses;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    use HttpResponses;

    //    public function Login()
    public function Login(): JsonResponse
    {
        return $this->success('This is my login method');
        //        return response()->json('This is my login method');
    }
}
