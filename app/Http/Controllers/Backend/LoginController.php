<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    // public function adminLogin(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);
    //     $credentials = $request->only('email', 'password');
    //     if (Auth::attempt($credentials)) {
    //         return redirect()->intended('dashboard')->withSuccess('Signed in');
    //     }
    //     return redirect()->back()->with('error','Oppes! You have entered invalid credentials');
       
    // }


    public function adminLogin(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
  
        if (auth()->attempt($data)) {
            //$token = auth()->user()->createToken('Laravel8PassportAuth')->accessToken;
            //return response()->json(['token' => $token], 200);
            return redirect()->intended('dashboard')->withSuccess('Signed in');
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }
 

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('')->with('success','You are successfully loged ioutn. ');
    }
}
