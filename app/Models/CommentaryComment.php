<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentaryComment extends Model
{
    use HasFactory;
    
    //Commntaryに対するリレーション
    public function commentary()
    {
        return $this->belongsTo(Commentary::class);
    }
    
    //Userに対するリレーション
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
