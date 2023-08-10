<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\result;

class MypageController extends Controller
{
    //mypage：マイページを表示する
    public function mypage(User $user, Result $result) {
        return view('mypages.mypage')->with([
            'user' => $user,
            // 'results' => $result->get(),
        ]);
    }  
}
