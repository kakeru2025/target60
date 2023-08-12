<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Year;
use App\Models\Exam;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    // toppage：トップページを表示する
    public function toppage(Year $year, Exam $exam, Result $result)
    {
        return view('toppage')->with([
            'years' => $year->get(),
            'exams' => $exam->get(),
            'results' => $result->get(),
        ]);
    } 
    
    // mypage：マイページを表示する
    public function mypage(User $user, Year $year, Exam $exam, Result $result)
    {
        return view('mypages.mypage')->with([
            'user' => $user,
            'years' => $year->get(),
            'exams' => $exam->get(),
            'results' => $result->get(),
        ]);
    }
    
    
}
