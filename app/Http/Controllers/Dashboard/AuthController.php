<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function __construct() {
        Inertia::setRootView('app');
    }

    public function login(){
        $user = Auth::user();
        if($user){
            return redirect('/dashboard');
        }
        return Inertia::render('Dashboard/Auth/Login');
    }

    public function loginStore(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email|string',
            'password' => 'required|string'
        ]);
        if($validator->fails()){
            // $msg = array_column(array_values($validator->errors()->toArray()),0);
            return back()->withErrors($validator->errors());
            // return $this->errorJsonResponse($validator->errors()->toArray());
        }

        if (Auth::attempt(['email'=> $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
 
            return redirect('/dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
