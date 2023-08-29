<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Year;
use App\Models\Exam;
use App\Models\Result;
use App\Models\Category;
use App\Models\Saying;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Cloudinary;

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
    public function mypage(Year $year, Exam $exam, Result $result, Category $category, Task $task)
    {
        return view('mypages.mypage')->with([
            'years' => $year->get(),
            'exams' => $exam->get(),
            'results' => $result->get(),
            'categories' => $category->get(),
            'tasks' => $task->get()
        ]);
    }
    
    // welcome：おかえりページを表示する
    public function welcome(Saying $saying)
    {
        $saying = Saying::inRandomOrder()->first();
        
        return view('mypages.welcome')->with(['saying' => $saying]);
    }
    
    
    
    public function store(Request $request, User $user)
    {
        $user = User::find(Auth::user()->id);
        $input_user = $request['user'];
        if($request->file('image')) {
            $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $input_user += ['image_url' => $image_url];
        }
        $user->fill($input_user)->save();
        return redirect('/mypage');
    }
    
}