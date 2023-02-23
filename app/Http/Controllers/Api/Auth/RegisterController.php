<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\RegisterFormRequest;
use Illuminate\Support\Facades\Validator;
use App\User;



class RegisterController extends Controller
{
    public function __invoke(RegisterFormRequest $request)
    {
        $user = User::create(array_merge(
            $request->only('name', 'email'),
            ['password' => bcrypt($request->password)]
        ));

        $message = 'You were successfully registered. Use your email and password to sign in.';
        // return response()->json([
        //     'message' => 'You were successfully registered. Use your email and password to sign in.'
        // ], 200);

        return view('login')->with('message', $message);
    }
}
