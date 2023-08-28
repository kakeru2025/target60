<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentary;

class CommentaryController extends Controller
{
    //unit:単元一覧を表示する
    public function unit(Commentary $commentary, Request $request)
    {
        $keyword = $request->input('keyword');

        $query = Commentary::query();

        if(!empty($keyword)) {
            $query->where('name', 'LIKE', "%{$keyword}%")
                ->orWhere('content', 'LIKE', "%{$keyword}%");
        }
            $commentaries = $query->get();
            // dd($commentaries);
        // $posts = $query->get();
        return view('commentaries.unit', compact('commentaries', 'keyword'));
        // return view('commentaries.unit')->with(['commentaries' => $commentary->get()]);
    }
    
    //commentary:各単元の解説ページを表示する
    public function commentary(Commentary $commentary)
    {
        $pattern = '/｜(.+?)｜/i';
        $replacement = '<b>$1</b>';
        $commentary->content = preg_replace($pattern, $replacement, $commentary->content);
        return view('commentaries.commentary')->with(['commentary' => $commentary]);
    }
}
