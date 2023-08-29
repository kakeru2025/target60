<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Year;
use App\Models\Exam;
use App\Models\Result;
use App\Models\Category;
use App\Models\Task;

class TaskController extends Controller
{
    // create：タスクを追加する
    public function create(Year $year, Exam $exam, Result $result, Category $category, Task $task, Request $request)
    {
        $task = new Task();
        $input = $request['task'];
        $task -> name = $input["name"];
        $task -> user_id = Auth::user()->id;
        $task -> save();
        
        return view('mypages.mypage')->with([
            'years' => $year->get(),
            'exams' => $exam->get(),
            'results' => $result->get(),
            'categories' => $category->get(),
            'tasks' => $task->get(),
        ]);
    }
    
    // edit：タスク編集ページを表示する
    public function edit(Task $task)
    {
        return view('tasks.edit')->with(['task' => $task]);
    } 
    
    // update：タスクを更新する
    public function update(Task $task, Request $request)
    {
        
        $input = $request['task'];
        $task -> name = $input["name"];
        $task -> save();
        return redirect('/mypage');
    } 
    
    // delete：タスクを削除する
    public function delete(Task $task)
    {
        $task -> delete();
        return redirect('/mypage');
    } 
}
