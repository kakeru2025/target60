<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Year;
use App\Models\Exam;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    //index:exam一覧を表示する
    public function index(Year $year, User $user, Exam $exam, Result $result)
    {
        return view('exams.index')->with([
            'years' => $year->get(),
            'user' => $user,
            'exams' => $exam->get(),
            'results' => $result->get(),
        ]);
    }
    
    //examine:各年の問題ページを表示する
    public function examine(Year $year, Exam $exam)
    {
        return view('exams.examine')->with([
            'year' => $year,
            'exams' => $exam->get(),
        ]);
    }
    
    //explanate：各年の問題解説ページを表示する
    public function explanate(Year $year, Exam $exam, Request $request)
    {
        $input = $request['my_answer'];
        $results = [];
        foreach ($year->exams()->get() as $exam) {
            $result = new Result();
            if ($input[$exam->id] == $exam->answer) {
                $result->is_correct = true;
                $result->exam_id = $exam->id;
                $result->user_id = Auth::user()->id;
            } else {
                $result->is_correct = false;
                $result->exam_id = $exam->id;
                $result->user_id = Auth::user()->id;
            }
            $result->save();
            
            $results[$exam->id]=$result;
        }
            return view('exams.explanate')->with([
            'year' => $year,
            'exams' => $exam->get(),
            'my_answers' => $request['my_answer'],
            'results' => $results,
        ]);
    }
}
