<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //Userに対するリレーション
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    protected $fillable = [
        'name',
        'user_id',
    ];
}