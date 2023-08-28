<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    //Commentaryに対するリレーション
    public function commentaries()
    {
        return $this->hasMany(Commentary::class);
    }
    
    //Examに対するリレーション
    public function exams()
    {
        return $this->hasMany(Exam::class);
    }
}
