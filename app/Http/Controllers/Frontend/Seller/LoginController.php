<?php

namespace App\Http\Controllers\Frontend\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('frontend.seller.login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if(!Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('seller.account');
        }
        return back()->withErrors([
            'email' => 'The provided credentials does not match our records'
        ]);
    }
}
