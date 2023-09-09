<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;

class TaskController extends Controller
{
    // create：タスクを追加する
    public function create(Task $task, Request $request)
    {
        $task = new Task();
        $input = $request['task'];
        $task -> name = $input["name"];
        $task -> user_id = Auth::user()->id;
        $task -> save();
        
        return redirect('/mypage');
    }
    
    // edit：タスク編集ページを表示する
    public function edit(Task $task)
    {
        return view('tasks.edit')->with(['task' => $task]);
    } 
    
    // update：タスクを更新する
    public function update(Task $task, Request $request)
    {
        if ($request->status === null) {
            //タスク内容を変更
            $input = $request['task'];
            $task -> name = $input["name"];
            $task -> save();
        } else {
            //タスクが完了
            $task -> status = true;
            $task -> save();
        }
        
        return redirect('/mypage');
    } 
    
    // delete：タスクを削除する
    public function delete(Task $task)
    {
        $task -> delete();
        return redirect('/mypage');
    } 
}
