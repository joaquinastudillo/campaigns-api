<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class AuthController extends Controller
{
    public function login(Request $request){

        $request->request->add([
            'grant_type' => 'password',
            'client_id' => 8,
            'client_secret' => 'Zr2njzLIoQEOri0oTYNwEXLW715N7WtirFe9NXmk',
            'username' => $request->username,
            'password' => $request->password,
        ]);

        $tokenRequest = Request::create(env('APP_URL').'/oauth/token', 'POST');

        $response = Route::dispatch($tokenRequest);

        return $response;
    }

    public function logout(){
        auth()->user()->tokens->each(function ($token, $key){
            $token->delete();
        });

        return response()->json('Logged out succesfully');
    }
}
