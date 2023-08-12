<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentary;

class CommentaryController extends Controller
{
    //
    public function index(Commentary $commentary)
    {
        return view('commentaries.index')->with(['commentaries' => $commentary->get()]);
    }
}
