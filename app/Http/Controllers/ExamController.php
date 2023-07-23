<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Year;
use App\Models\Exam;

class ExamController extends Controller
{
    //index:exam一覧を表示する
    public function index(Year $year)
    {
        return view('exams.index')->with(['years' => $year->get()]);
    }
    
    //test:各年の問題ページを表示する
    public function examine(Year $year, Exam $exam)
    {
        return view('exams.examine')->with(['years' => $year->get()], ['exams' => $exam->get()]);
    }
}
