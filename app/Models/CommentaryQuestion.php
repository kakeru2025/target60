<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentaryQuestion extends Model
{
    use HasFactory;
    
    //Commentaryに対するリレーション
    public function commentary()
    {
        return $this->belongsTo(Commentary::class);
    }
}
