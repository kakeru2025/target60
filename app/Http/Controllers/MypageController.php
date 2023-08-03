<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class MypageController extends Controller
{
    public function mypage(User $user) {
        return view('mypages.mypage')->with(['user' => $user]);
    }  
}
