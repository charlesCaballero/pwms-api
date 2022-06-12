<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use ApiResponser;

    public function register(Request $request)
    {
        

        $user = User::create([
            'company_id_number' => $request->company_id_number,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'office_id' => $request->office_id,
            'password' => bcrypt($request->password),
            'email' => $request->email
        ]);

        return $this->success([
            'token' => $user->createToken('API Token')->plainTextToken
        ]);
    }

    public function login(Request $request)
    {
        $credentials = [
            'company_id_number'=>$request->company_id_number, 
            'password'=>$request->password
        ];

        if (!Auth::attempt($credentials)) {
            return $this->error('Your user id or password did not match to any of our record.', 401);
        }

        return $this->success([
            'token' => auth()->user()->createToken('API Token')->plainTextToken
        ]);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Tokens Revoked'
        ];
    }
}