<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Officers;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use ApiResponser;

    public function register(Request $request)
    {
        
        try{
            $user = User::create([
                'company_id_number' => $request->company_id_number,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'office_id' => $request->office_id,
                'role_id' => $request->role_id,
                'password' => bcrypt($request->password),
                'email' => $request->email,
            ]);

            return $this->success([
                'token' => $user->createToken('API Token')->plainTextToken
            ]);
        } catch(\Illuminate\Database\QueryException $ex){ 
            $message =$ex->getMessage();
            $error = ''; 
            if (str_contains($message,'SQLSTATE[23000]')) {
                // $error = 'Your id number is already registered. Please try a different id number or contact the administrator.';
                $error = $message;
            }
            else {
                $error = $message;
            }
            return $this->error($error,500);
        }
    }

    public function login(Request $request)
    {
        $credentials = [
            'company_id_number'=>$request->company_id_number, 
            'password'=>$request->password
        ];
        if (!Auth::attempt($credentials)) {
            return $this->error('Your user id or password did not match.', 200);
        }
        if (Auth::user()->status === 0) {
            return $this->error('Your account is not yet activated.', 200);
        }

        $officer = Officers::select('first_name','middle_initial','last_name')->where('office_id',Auth::user()->office_id)->first();

        return $this->success([
            'token' => auth()->user()->createToken('API Token')->plainTextToken,
            'user_id' => Auth::user()->company_id_number,
            'user_name' => Auth::user()->first_name.' '.Auth::user()->last_name,
            'office_head'=> $officer->first_name.' '.$officer->middle_initial.'. '.$officer->last_name,
            'office_name'=> Auth::user()->office->name,
            'office_id' => Auth::user()->office_id
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