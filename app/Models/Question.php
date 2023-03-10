<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'university_id',
        'text'
    ];
    
    public function question()
    {
        return $this->belongTo(User::class);
        return $this->belongTo(University::class);
        return $this->hasMany(Answer::class);
    }
}
