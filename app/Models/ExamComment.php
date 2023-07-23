<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamComment extends Model
{
    use HasFactory;
    
    //Yearに対するリレーション
    public function year()
    {
        return $this->belongsTo(Year::class);
    }
    
    //Userに対するリレーション
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
