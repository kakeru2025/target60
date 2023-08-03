<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    
    //Examに対するリレーション
    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
    
    //Userに対するリレーション
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
