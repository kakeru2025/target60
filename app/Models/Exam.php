<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    
    //Resultに対するリレーション
    public function result()
    {
        return $this->belongsTo(Result::class);
    }
    
    //Yearに対するリレーション
    public function year()
    {
        return $this->belongsTo(Year::class);
    }
    
    protected $fillable = [
    'year_id',
    'question_string'
];
}
