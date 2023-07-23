<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;
    
    //ExamCommentに対するリレーション
    public function exam_comments()
    {
        return $this->hasMany(ExamCommnet::class);
    }
    
    //Examに対するリレーション
    public function exams()
    {
        return $this->hasMany(Exam::class);
    }
}
