<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentary extends Model
{
    use HasFactory;
    
    //Categoryに対するリレーション
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    //CommentaryQuestionに対するリレーション
    public function commentary_questions()
    {
        return $this->hasMany(CommentaryQuestion::class);
    }
    
    //CommentaryCommentに対するリレーション
    public function commentary_comments()
    {
        return $this->hasMany(CommentaryComment::class);
    }
}
