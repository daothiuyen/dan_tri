<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function login(){
        return view('auth.login');
    }

    public function postLogin(Request $request){
        $check = [ 'email'=>$request->email,'password'=>$request->password];
        if(Auth::attempt($check)){
            return redirect('event/');
        }else{
            return redirect('login/')->with('danger','"Email hoac mat khau khong dung');

        }
        return view('auth.login');
    }
}
