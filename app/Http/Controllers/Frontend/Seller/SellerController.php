<?php

namespace App\Http\Controllers\Frontend\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function account(){
        return view('frontend.seller.account');
    }
    public function registration(){
        return view('frontend.seller.signup');
    }
   
    public function create(){
        return view('frontend.seller.create');
    }
}
