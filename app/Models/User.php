<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image_url',
        'target_school',
        'self_introduction',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    //CommentaryCommentに対するリレーション
    public function commentary_comments()
    {
        return $this->hasMany(CommentaryComment::class);
    }
    
    //Resultに対するリレーション
    public function results()
    {
        return $this->hasMany(Result::class);
    }
    
    //ExamCommentに対するリレーション
    public function exam_commtents()
    {
        return $this->hasMany(ExamComment::class);
    }
}
