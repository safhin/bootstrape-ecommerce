<?php

namespace App\Http\Controllers\Frontend\Seller;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function registration()
    {
        return view('frontend.seller.signup');
    }
    public function signUp(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email|unique:sellers,email',
            'phone' => 'required',
            'city' => 'required',
            'country' => 'required',
            'password' => 'required|min:8',
        ]);
        Seller::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
            'country' => $request->country,
            'password' => $request->password,
        ]);
        Auth::attempt($request->only('email', 'password'));
        return redirect()->route('seller.account');
    }

}
