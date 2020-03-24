<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attendee;

class AuthController extends Controller
{
    public function login(Request $request){
    	$attendee = Attendee::where('lastname',$request->get('lastname'))->where('registration_code',$request->get('registration_code'))->first();
    	if(!$attendee){
    		return response()->json(['message'=>'Invalid login'],401);
    	}
    	$attendee->login_token = md5($attendee->username);
    	$attendee->save();
    	return array_merge($attendee->toArray(),['token'=>$attendee->login_token]);
    }
     public function logout(Request $request){
    	$attendee = Attendee::where('login_token',$request->get('token'))->first();
    	if(!$attendee){
    		return response()->json(['message'=>'Invalid token'],401);
    	}
    	$attendee->login_token = null;
    	$attendee->save();
    	return ['message'=>'Logout success']
    }
}
