<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class PassportAuthController extends Controller
{
   
    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
 
        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
            //return response()->json(['token' => $token], 200);
			return response()->json([
            "success" => true,
            "message" => "Login successfully.",
            "token" => $token
        ], 200);
			
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }   
}
